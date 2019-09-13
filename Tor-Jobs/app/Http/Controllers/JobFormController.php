<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Jobs;
use DB;
use App\Http\Controllers\Gate;

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
            'jobtype' => 'required',
            'company_website' => 'required',
            'company_description' => 'required',
            'jobcategory' => 'required',
            'closing_date' => 'required',
            'application_notify_email' => 'required',
            'salary_offer' => 'required',
            'experience_level' => 'required',
            'total_years' => 'required',
            'academic_degree' => 'required',
            'dress_code' => 'required',
            'job_description' => 'required',
            'working_hours' => 'required',
            'google' => 'required',
            'facebook' => 'required',
            'instagram' => 'required',
            'linkedin' => 'required',
            'cover_image' => 'image|nullable|max:1999',
            'cover_image2' => 'image|nullable|max:1999',
            'company_logo' => 'image|nullable|max:1999',
        ));

                  // file upload
                  if($request->hasFile('cover_image')){
                    $fileNameWithExt = $request->file('cover_image')->getClientOriginalName();
                    // get file name
                    $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
                    // get extension
                    $extension = $request->file('cover_image')->getClientOriginalExtension();
        
                    $fileNameToStore = $filename.'_'.time().'.'.$extension;
                    // upload
                    $path = $request->file('cover_image')->storeAs('public/cover_images', $fileNameToStore);
                }
                else{
                    $fileNameToStore = 'noimage.jpg';
                }

        $job = new Jobs;
        $job->jobtitle = $request->input('jobtitle');
        $job->company_name = $request->input('company_name');
        $job->location = $request->input('location');
        $job->jobtype = $request->input('jobtype');
        $job->company_website = $request->input('company_website');
        $job->company_description = $request->input('company_description');
        $job->jobcategory = $request->input('jobcategory');
        $job->closing_date = $request->input('closing_date');
        $job->application_notify_email = $request->input('application_notify_email');
        $job->salary_offer = $request->input('salary_offer');
        $job->experience_level = $request->input('experience_level');
        $job->total_years = $request->input('total_years');
        $job->academic_degree = $request->input('academic_degree');
        $job->dress_code = $request->input('dress_code');
        $job->job_description = $request->input('job_description');
        $job->working_hours = $request->input('working_hours');
        $job->google = $request->input('google');
        $job->facebook = $request->input('facebook');
        $job->twitter = $request->input('twitter');
        $job->instagram = $request->input('instagram');
        $job->linkedin = $request->input('linkedin');
        $job->cover_image = $fileNameToStore;
        $job->cover_image2 = $fileNameToStore;
        $job->company_logo = $fileNameToStore;
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
    // public function edit($id)
    // {
    //     $job = Jobs::find($id);
    //     return view('jobform.edit')->with('job',$job);
    // }

    // /**
    //  * Update the specified resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function update(Request $request, $id)
    // {
    //     $this->validate($request, array(
    //         'jobtitle' => 'required',
    //         'companyname' => 'required',
    //         'location' => 'required',
    //         'jobtype' => 'required',
    //         'company_website' => 'required',
    //         'company_description' => 'required',
    //         'jobcategory' => 'required',
    //         'closing_date' => 'required',
    //         'application_notify_email' => 'required',
    //         'salary_offer' => 'required',
    //         'experience_level' => 'required',
    //         'total_years' => 'required',
    //         'academic_degree' => 'required',
    //         'dress_code' => 'required',
    //         'job_description' => 'required',
    //         'working_hours' => 'required',
    //         'google' => 'required',
    //         'facebook' => 'required',
    //         'instagram' => 'required',
    //         'linkedin' => 'required',
    //         'cover_image' => 'image|nullable|max:1999',
    //         'cover_image2' => 'image|nullable|max:1999',
    //         'company_logo' => 'image|nullable|max:1999',
    //     ));

        
    //     $post = Jobs::find($id);
    //     $job->jobtitle = $request->input('jobtitle');
    //     $job->company_name = $request->input('company_name');
    //     $job->location = $request->input('location');
    //     $job->jobtype = $request->input('jobtype');
    //     $job->company_website = $request->input('company_website');
    //     $job->company_description = $request->input('company_description');
    //     $job->jobcategory = $request->input('jobcategory');
    //     $job->closing_date = $request->input('closing_date');
    //     $job->application_notify_email = $request->input('application_notify_email');
    //     $job->salary_offer = $request->input('salary_offer');
    //     $job->experience_level = $request->input('experience_level');
    //     $job->total_years = $request->input('total_years');
    //     $job->academic_degree = $request->input('academic_degree');
    //     $job->dress_code = $request->input('dress_code');
    //     $job->job_description = $request->input('job_description');
    //     $job->working_hours = $request->input('working_hours');
    //     $job->google = $request->input('google');
    //     $job->facebook = $request->input('facebook');
    //     $job->twitter = $request->input('twitter');
    //     $job->instagram = $request->input('instagram');
    //     $job->linkedin = $request->input('linkedin');
    //     $job->cover_image = $fileNameToStore;
    //     $job->cover_image2 = $fileNameToStore;
    //     $job->company_logo = $fileNameToStore;
    //     $post->save();

    //     return redirect('/jobform')->with('success', 'Post Updated');
    // }

    public function search(Request $request){
        $search = $request->get('search');
        $location = $request->get('location');
        $jobs = Jobs::where('jobtitle', 'like', '%'.$search.'%')
                        ->where('location', 'like', '%'.$location.'%')
                        ->paginate(5);

       return view('jobform.index', ['jobs' => $jobs]);       

    }

    public function company(){
        return view('company.company');
    }
    public function details(){
        return view('company.company-details');
    }
}
