<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Resume;
class PagesController extends Controller
{
  
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
        $user_id = auth()->user('id');
         $user = User::find($user_id);
         $resumes = Resume::orderBy('created_at','desc')->paginate(3);

        return view('Profiles.Candidate.candidate-my-profile')->with('resumes', $user->resumes);
    }
    public function employer_profile(){
        return view('Profiles.Employer.employer');
    }
}
