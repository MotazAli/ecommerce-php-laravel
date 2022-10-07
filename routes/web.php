<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StoresController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });





//Store page// https://<URL>/store
Route::get('/stores/{id}',[StoresController::class,'show'])->name('shores.show');
Route::get('/stores',[StoresController::class,'index'])->name('stores.index');

//About page// https://<URL>/about
Route::get('/about',[AboutController::class,'index'])->name('about.index');


//Home page// https://<URL>/
Route::get('/home',[HomeController::class,'index'])->name('home.index');
Route::get('/', [HomeController::class,'soonIndex'])->name('home.soon');
