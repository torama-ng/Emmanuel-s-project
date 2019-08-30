<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function company(){

        $jobs = Jobs::orderBy('created_at','desc')->paginate(3);
        return view('company.company')->with('jobs', $jobs);
    }



    public function show($id)
    {
       $job = Jobs::find($id);
       return view('jobform.show')->with('job',$job);
    }

}
