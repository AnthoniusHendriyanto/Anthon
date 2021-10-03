<?php

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
//     return view('main');
// });

Route::view('/home', 'components/home', ['title' => 'Home']);
Route::view('/', 'components/home', ['title' => 'Home']);
Route::view('/contact', 'components/contact' , ['title' => 'Contact']);
Route::view('/experience', 'components/experience', ['title' => 'Experience']);
