<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\inquiry;
use App\schedule;
use App\newsletter;
use App\post;
use App\banner;
use App\imagetable;
use DB;
use Mail;use View;
use Session;
use App\Http\Helpers\UserSystemInfoHelper;
use App\Http\Traits\HelperTrait;
use Auth;
use App\Profile;
use App\Career;


class HomeController extends Controller
{   
    use HelperTrait;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
     // use Helper;
     
    public function __construct()
    {
        //$this->middleware('auth');

        $logo = imagetable::
                     select('img_path')
                     ->where('table_name','=','logo')
                     ->first();

        $logo2 = imagetable::
                     select('img_path')
                     ->where('table_name','=','logo2')
                     ->first();
             
        $favicon = imagetable::
                     select('img_path')
                     ->where('table_name','=','favicon')
                     ->first(); 
        
        View()->share('logo',$logo);
        View()->share('logo2',$logo2);
        View()->share('favicon',$favicon);

    } 

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
        $banner1 = DB::table('banners')->where('id',1)->first(); 
        $banner2 = DB::table('banners')->where('id',2)->first(); 
        $banner3 = DB::table('banners')->where('id',3)->first();   
        
        $cms_home1 = DB::table('pages')->where('id', 4)->first();
        $cms_home2 = DB::table('pages')->where('id', 9)->first();
        $cms_home3 = DB::table('pages')->where('id', 10)->first();
        $cms_home4 = DB::table('pages')->where('id', 11)->first();

        $job_offer=DB::table('receiving_jobs')->get();
        $testimonials=DB::table('testimonials')->get();
        $blogs=DB::table('blogs')->get();

        $products = DB::table('products')->get()->take(10);

        return view('welcome', compact('banner1', 'banner2', 'banner3', 'cms_home1', 'cms_home2', 'job_offer', 'testimonials', 'cms_home3', 'cms_home4', 'blogs'));
    }

    public function about()
    { 
        $cms_about = DB::table('pages')->where('id', 6)->first();
        $cms_about2 = DB::table('pages')->where('id', 13)->first();

        return view('about', compact('cms_about', 'cms_about2'));
    }

    public function career()
    { 
        $cms_career = DB::table('pages')->where('id', 14)->first();
        $cms_career2 = DB::table('pages')->where('id', 20)->first();
        return view('career', compact('cms_career', 'cms_career2'));
    }

    public function contact()
    { 
        $cms_contact = DB::table('pages')->where('id', 15)->first();
        return view('contact', compact('cms_contact'));
    }

    public function drug()
    { 
        $cms_drug = DB::table('pages')->where('id', 16)->first();
        return view('drug', compact('cms_drug'));
    }

    public function employersResources()
    { 
        $cms_emp1 = DB::table('pages')->where('id', 7)->first();
        $cms_emp2 = DB::table('pages')->where('id', 8)->first();
        $cms_emp3 = DB::table('pages')->where('id', 17)->first();
        return view('empresources', compact('cms_emp1', 'cms_emp2', 'cms_emp3'));
    }

    public function jobSeek()
    { 
        $cms_job = DB::table('pages')->where('id', 12)->first();

        $jobs=DB::table('jobs')->get();
        return view('jobseek', compact('cms_job', 'jobs'));
    }

    public function news($id)
    { 
        $blog = DB::table('blogs')->where('id', $id)->get()->first();
        $prev=DB::table('blogs')->where('id', $id-1)->get()->first();
        $next=DB::table('blogs')->where('id', $id+1)->get()->first();
        $recent_posts = DB::table('blogs')->orderBy('id', 'DESC')->get()->take(3);
        return view('news', compact('blog', 'prev', 'next', 'recent_posts'));
    }

    public function registration()
    { 
        $cms_register = DB::table('pages')->where('id', 19)->first();
        return view('registration', compact('cms_register'));
    }

    public function training()
    { 
        $cms_train = DB::table('pages')->where('id', 18)->first();
        $cms_training = DB::table('pages')->where('id', 21)->first();

        $videos=DB::table('videos')->get();

        return view('training', compact('cms_train', 'cms_training', 'videos'));
    }

    public function careerSubmit(Request $request)
    {
         $this->validate($request, [
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'job_sector' => 'required',
            'comment' => 'required',
            'resume' => 'required|mimes:pdf,doc,docx|max:2048'
        ]);
      
          if ($request->hasFile('resume')) {
              
              $career = new career;
            $career->name = $request->name;
            $career->phone = $request->phone;
            $career->email = $request->email;
            $career->job_sector = $request->job_sector;
            $career->comment = $request->comment;

                $file = $request->file('resume');
                //make sure yo have image folder inside your public
                $resume_path = 'uploads/careers/';
                $fileName = $file->getClientOriginalName();
                $profileImage = date("Ymd").$fileName.".".$file->getClientOriginalExtension();

               //$request->file->move(public_path($resume_path) . DIRECTORY_SEPARATOR. $profileImage);
                $request->resume->move(public_path('uploads/careers/'), $profileImage);

                $career->resume = $resume_path.$profileImage;
                $career->save();
            }

            Session::flash('message', 'Thank you for applying. We will get back to you asap!'); 
            Session::flash('alert-class', 'alert-success'); 
            return back();
    }

    public function contactUsSubmit(Request $request)
    {
        $this->validate($request, [
            'subject' => 'required',
            'name' => 'required',
            'company' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'message' => 'required',
            'respond' => 'required',
            'time' => 'required'
        ]);

        $inquiry = new inquiry;
        $inquiry->subject = $request->subject;
        $inquiry->inquiries_fname = $request->name;
        $inquiry->company = $request->company;
        $inquiry->inquiries_phone = $request->phone;
        $inquiry->inquiries_email = $request->email;
        $inquiry->extra_content = $request->message;
        $inquiry->respond = $request->respond;
        $inquiry->time = $request->time;
        $inquiry->save();
            
        Session::flash('message', 'Thank you for contacting us. We will get back to you asap'); 
        Session::flash('alert-class', 'alert-success'); 
        return back();
    }

    public function newsletterSubmit(Request $request)
    {
        $this->validate($request, [
            'email' => 'required',
        ]);

        $is_email = newsletter::where('newsletter_email',$request->email)->count();
        
        if($is_email == 0) {
            
        $inquiry = new newsletter;
        //$inquiry->newsletter_name = $request->name;
        $inquiry->newsletter_email = $request->email;
        //$inquiry->newsletter_message = $request->comment;
        $inquiry->save();
        Session::flash('message', 'Thank you for subscribing. We will get back to you asap!'); 
        Session::flash('alert-class', 'alert-success'); 
        return redirect('/');
        
        } else {
            Session::flash('flash_message', 'email already exists'); 
            Session::flash('alert-class', 'alert-success'); 
            return redirect('/');
        }
        
    }

    public function apply()
    { 
        $user_id=$_GET['user_id'];
        $job_id=$_GET['job_id'];

        $apply = DB::table('profiles')->where('user_id', $user_id)->first();
       

         $profile = new Profile();
            $profile->user_id = $apply->user_id;
             $profile->job_id = $job_id;
             $profile->source = $apply->source;
            $profile->salutation = $apply->salutation;
            $profile->first_name = $apply->first_name;
            $profile->last_name = $apply->last_name;
            $profile->dob = $apply->dob;
            $profile->home_phone = $apply->home_phone;
            $profile->mobile = $apply->mobile;
            $profile->emergency_phone = $apply->emergency_phone;
            $profile->address = $apply->address;
            $profile->street_address = $apply->street_address;
            $profile->city = $apply->city;
            $profile->postal = $apply->postal;
            $profile->country = $apply->country;
            $profile->education = $apply->education;
            $profile->key_skill = $apply->key_skill;
            $profile->experience = $apply->experience;
            $profile->working_day = $apply->working_day;
            $profile->resume = $apply->resume;
            $profile->shift = $apply->shift;
            $profile->location = $apply->location;
            $profile->transportation = $apply->transportation;

            $profile->save();

       Session::flash('message', 'Thank you for applying!'); 
        Session::flash('alert-class', 'alert-success'); 
        return back();
    }
   
}
