<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StoresController extends Controller
{
    //show all stores
    function index(){
        return view('stores.index',['stores' => [
            ['id' => 1 , 'title' => 'men', 'description' => 'men stores' ,'image' => 'men.jpg' , ],
            ['id' => 2 , 'title' => 'women', 'description' => 'women stores' ,'image' => 'women.jpg' , ],
            ['id' => 3 , 'title' => 'kids', 'description' => 'kids stores' ,'image' => 'kids.jpg' , ],
        ]]);
    }


    //show all stores
    function show($id){
        return view('stores.show',['store' =>  [
            ['id' => $id],
            ['categories' => 
                ['id' => 1 , 'title' => 'gi', 'description' => 'gi jiu jitsu collection' ,'image' => 'men.jpg' , ],
                ['id' => 2 , 'title' => 'shorts', 'description' => 'shorts collection' ,'image' => 'women.jpg' , ],
                ['id' => 3 , 'title' => 'accessories', 'description' => 'all accessories collection' ,'image' => 'kids.jpg' , ],
            ]
            
        ]]);
    }

}
