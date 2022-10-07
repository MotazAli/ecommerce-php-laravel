<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //show home index
    function soonIndex(){
        return view('home.soon');
    }


    function index(){
        return view('home.index');
    }
}
