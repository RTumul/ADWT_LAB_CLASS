<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\department;
use App\Models\student;

class pageController extends Controller
{
    //
    function home(){
        return view('public.home');
    }

    function student(){
       $dept = department::where('id',1)->first();
       return $dept-> students;
    }

    function showtableStudent(){
        $all = department::all();
        return view('public.details') -> with('dept',$all);
    }
}
