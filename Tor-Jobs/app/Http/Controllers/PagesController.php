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
    
}
