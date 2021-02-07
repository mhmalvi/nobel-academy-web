<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CoursesController extends Controller
{
    /**
     * 
     */
    public function BeautyDiploma(){
        return view('pages.BeautyDiploma');
    }


    /**
     * 
     */
    public function remedial(){
        return view('pages.remedial');
    }


    /**
     * 
     */
    public function hairderssing(){
        return view('pages.hairdressing');
    }


    /**
     * 
     */
    public function BeautyTherapy(){
        return view('pages.BeautyTherapy');
    }
}
