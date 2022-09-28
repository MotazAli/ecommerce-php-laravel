<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    //index show all 
    function index(){
        return view('about.index');
    }
}
