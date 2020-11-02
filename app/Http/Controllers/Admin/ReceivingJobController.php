<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\ReceivingJob;
use Illuminate\Http\Request;
use Image;
use File;

class ReceivingJobController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */

    public function index(Request $request)
    {
        $model = str_slug('receivingjob','-');
        if(auth()->user()->permissions()->where('name','=','view-'.$model)->first()!= null) {
            $keyword = $request->get('search');
            $perPage = 25;

            if (!empty($keyword)) {
                $receivingjob = ReceivingJob::where('title', 'LIKE', "%$keyword%")
                ->orWhere('description', 'LIKE', "%$keyword%")
                ->paginate($perPage);
            } else {
                $receivingjob = ReceivingJob::paginate($perPage);
            }

            return view('admin.receiving-job.index', compact('receivingjob'));
        }
        return response(view('403'), 403);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $model = str_slug('receivingjob','-');
        if(auth()->user()->permissions()->where('name','=','add-'.$model)->first()!= null) {
            return view('admin.receiving-job.create');
        }
        return response(view('403'), 403);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        $model = str_slug('receivingjob','-');
        if(auth()->user()->permissions()->where('name','=','add-'.$model)->first()!= null) {
            $this->validate($request, [
			'title' => 'required',
			'description' => 'required'
		]);

            $receivingjob = new receivingjob($request->all());

            if ($request->hasFile('image')) {

                $file = $request->file('image');
                
                //make sure yo have image folder inside your public
                $receivingjob_path = 'uploads/receivingjobs/';
                $fileName = $file->getClientOriginalName();
                $profileImage = date("Ymd").$fileName.".".$file->getClientOriginalExtension();

                Image::make($file)->save(public_path($receivingjob_path) . DIRECTORY_SEPARATOR. $profileImage);

                $receivingjob->image = $receivingjob_path.$profileImage;
            }
            
            $receivingjob->save();

            return redirect('admin/receiving-job')->with('flash_message', 'ReceivingJob added!');
        }
        return response(view('403'), 403);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $model = str_slug('receivingjob','-');
        if(auth()->user()->permissions()->where('name','=','view-'.$model)->first()!= null) {
            $receivingjob = ReceivingJob::findOrFail($id);
            return view('admin.receiving-job.show', compact('receivingjob'));
        }
        return response(view('403'), 403);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $model = str_slug('receivingjob','-');
        if(auth()->user()->permissions()->where('name','=','edit-'.$model)->first()!= null) {
            $receivingjob = ReceivingJob::findOrFail($id);
            return view('admin.receiving-job.edit', compact('receivingjob'));
        }
        return response(view('403'), 403);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {
        $model = str_slug('receivingjob','-');
        if(auth()->user()->permissions()->where('name','=','edit-'.$model)->first()!= null) {
            $this->validate($request, [
			'title' => 'required',
			'description' => 'required'
		]);
            $requestData = $request->all();
            

        if ($request->hasFile('image')) {
            
            $receivingjob = receivingjob::where('id', $id)->first();
            $image_path = public_path($receivingjob->image); 
            
            if(File::exists($image_path)) {
                File::delete($image_path);
            }

            $file = $request->file('image');
            $fileNameExt = $request->file('image')->getClientOriginalName();
            $fileNameForm = str_replace(' ', '_', $fileNameExt);
            $fileName = pathinfo($fileNameForm, PATHINFO_FILENAME);
            $fileExt = $request->file('image')->getClientOriginalExtension();
            $fileNameToStore = $fileName.'_'.time().'.'.$fileExt;
            $pathToStore = public_path('uploads/receivingjobs/');
            Image::make($file)->save($pathToStore . DIRECTORY_SEPARATOR. $fileNameToStore);

             $requestData['image'] = 'uploads/receivingjobs/'.$fileNameToStore;               
        }


            $receivingjob = ReceivingJob::findOrFail($id);
             $receivingjob->update($requestData);

             return redirect('admin/receiving-job')->with('flash_message', 'ReceivingJob updated!');
        }
        return response(view('403'), 403);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        $model = str_slug('receivingjob','-');
        if(auth()->user()->permissions()->where('name','=','delete-'.$model)->first()!= null) {
            ReceivingJob::destroy($id);

            return redirect('admin/receiving-job')->with('flash_message', 'ReceivingJob deleted!');
        }
        return response(view('403'), 403);

    }
}
