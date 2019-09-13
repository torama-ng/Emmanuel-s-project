<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function company(){
        return view('company.company');
    }
    public function details(){
        return view('company.company-details');
    }
    public function blog(){
        return view('blog.blog');
    }
    public function blog_details(){
        return view('blog.blog-details');
    }

    public function resume_home(){
        return view('resume.home');
    } 
    public function resume_map(){
        return view('resume.map');
    }

    public function resume_home_2(){
        return view('resume.home-2');
    }
    public function Candidate_profile(){
        return view('Profiles.Candidate.candidate-my-profile');
    }
}
