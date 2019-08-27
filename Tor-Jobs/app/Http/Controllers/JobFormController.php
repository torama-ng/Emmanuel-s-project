<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jobs;
use DB;

class JobFormController extends Controller
{
    public function index()
    {
         /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
        $jobs = Jobs::orderBy('created_at','desc')->paginate(3);
        return view('jobform.index')->with('jobs', $jobs);
    }

     /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('jobform.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, array(
            'jobtitle' => 'required',
            'companyname' => 'required',
            'location' => 'required',
            'schedule' => 'required',
            'requirements' => 'required',
            'description' => 'required',
            'cover_image' => 'image|nullable|max:1999'
        ));

                  // file upload
                  if($request->hasFile('users_image')){
                    $fileNameWithExt = $request->file('users_image')->getClientOriginalName();
                    // get file name
                    $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
                    // get extension
                    $extension = $request->file('users_image')->getClientOriginalExtension();
        
                    $fileNameToStore = $filename.'_'.time().'.'.$extension;
                    // upload
                    $path = $request->file('users_image')->storeAs('public/users_images', $fileNameToStore);
                }
                else{
                    $fileNameToStore = 'noimage.jpg';
                }

        $job = new Jobs;
        $job->jobtitle = $request->input('jobtitle');
        $job->companyname = $request->input('companyname');
        $job->location = $request->input('location');
        $job->schedule = $request->input('schedule');
        $job->requirements = $request->input('requirements');
        $job->description = $request->input('description');
        $job->users_image = $fileNameToStore;
        $job->save();

        return redirect('/jobform')->with('success', 'Post Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       $job = Jobs::find($id);
       return view('jobform.show')->with('job',$job);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $job = Jobs::find($id);
        return view('jobform.edit')->with('job',$job);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, array(
            'jobtitle' => 'required',
            'companyname' => 'required',
            'location' => 'required',
            'schedule' => 'required',
            'requirements' => 'required',
            'description' => 'required',
            'cover_image' => 'image|nullable|max:1999',
        ));

        
        $post = Jobs::find($id);
        $post->jobtitle = $request->input('jobtitle');
        $post->companyname = $request->input('companyname');
        $post->location = $request->input('location');
        $post->schedule = $request->input('schedule');
        $post->requirements = $request->input('requirements');
        $post->description = $request->input('description');
        $post->cover_image = $fileNameToStore;
        $post->save();

        return redirect('/jobform')->with('success', 'Post Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post =Jobs::find($id);
        $post->delete();
        return redirect('/jobform')->with('error', 'Post Deleted');
    }
    public function search(Request $request){
        $search = $request->get('search');
        $location = $request->get('location');
        $jobs = Jobs::where('jobtitle', 'like', '%'.$search.'%')
                        ->where('location', 'like', '%'.$location.'%')
                        ->paginate(5);

       return view('jobform.index', ['jobs' => $jobs]);       

    }
}
