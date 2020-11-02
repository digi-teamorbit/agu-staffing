<?php

namespace App\Http\Controllers\Auth;

use App\Profile;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Auth\Events\Registered;
use Session;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/'; 

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6',
        ]);
    }

    /**
     * Handle a registration request for the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function register(Request $request)
    {
        $validator = $this->validator($request->all());
        if($validator->fails()){
            return redirect()->back()->withInput()->withErrors($validator, 'registerForm');
        }

        event(new Registered($user = $this->create($request->all())));

        $this->guard()->login($user);
        
        Session::flash('message', 'New Account Created Successfully'); 
        Session::flash('alert-class', 'alert-success'); 
        return $this->registered($request, $user)
                        ?: redirect($this->redirectPath());
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }

    protected function registered(Request $request, $user)
    {
        if($user->profile == null){
            $profile = new Profile();
            $profile->user_id = $user->id;
            // $profile->localisation = $request->localisation;
             $profile->job_id = $request->job_id;
             $profile->source = $request->source;
            $profile->salutation = $request->salutation;
            $profile->first_name = $request->first_name;
            $profile->last_name = $request->last_name;
            $profile->dob = $request->dob;
            $profile->home_phone = $request->home_phone;
            $profile->mobile = $request->mobile;
            $profile->emergency_phone = $request->emergency_phone;
            $profile->address = $request->address;
            $profile->street_address = $request->street_address;
            $profile->city = $request->city;
            $profile->postal = $request->postal;
            $profile->country = $request->country;
            $profile->education = $request->education;
            $profile->key_skill = $request->key_skill;
            $profile->experience = $request->experience;
            $profile->working_day = $request->working_day;
            // $profile->resume = $request->resume;
            $profile->shift = $request->shift;
            $profile->location = $request->location;
            $profile->transportation = $request->transportation;

             if ($request->hasFile('resume')) {

                $file = $request->file('resume');
                //make sure yo have image folder inside your public
                $resume_path = 'uploads/registrations/';
                $fileName = $file->getClientOriginalName();
                $profileImage = date("Ymd").$fileName.".".$file->getClientOriginalExtension();

               //$request->file->move(public_path($resume_path) . DIRECTORY_SEPARATOR. $profileImage);
                $request->resume->move(public_path('uploads/registrations/'), $profileImage);

                $profile->resume = $resume_path.$profileImage;
            }
            
            $profile->save();
        }
        activity($user->name)
            ->performedOn($user)
            ->causedBy($user)
            ->log('Registered');
        $user->assignRole('user');
    }
}
