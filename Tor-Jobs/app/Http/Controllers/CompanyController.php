<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function company(){

        // $jobs = Jobs::orderBy('created_at','desc')->paginate(3);
        return view('company.company');
    }



   

}
