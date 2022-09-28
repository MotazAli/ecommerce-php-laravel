<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //show home index
    function index(){
        return view('home.soon');
    }


    function realHomeIndex(){
        return view('home.index');
    }
}
