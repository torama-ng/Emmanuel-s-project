<?php

namespace App\Http\Controllers;

use App\Resume;
use Illuminate\Http\Request;

class ResumeController extends Controller
{

    
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $resumes = Resume::orderBy('created_at','desc')->paginate(3);
        return view('resume.index')->with('resumes', $resumes);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('resume.create');
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
            'education_school'=> 'required',
            'education_qualification'=> 'required',
            'education_date'=> 'required',
            'education_note'=> 'required',
            'experience_employer'=> 'required',
            'experience_job'=> 'required',
            'experience_date'=> 'required',
            'experience_note'=> 'required',
            'skill_name'=> 'required',
            'skill_percent'=> 'required',
        ));

        $resume = new Resume;
        $resume->education_school = $request->input('education_school');
        $resume->education_qualification = $request->input('education_qualification');
        $resume->education_date = $request->input('education_date');
        $resume->education_note = $request->input('education_note');
        $resume->experience_employer = $request->input('experience_employer');
        $resume->experience_job = $request->input('experience_job');
        $resume->experience_date = $request->input('experience_date');
        $resume->experience_note = $request->input('experience_note');
        $resume->skill_name = $request->input('skill_name');
        $resume->skill_percent = $request->input('skill_percent');
        // $resume->user_id = auth()->save()->id;
        $resume->save();

        return redirect('/resume')->with('success', 'Resume Successfully Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int id  
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $resume = Resume::find($id);
       return view('resume.show')->with('resume',$resume);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int id  
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
