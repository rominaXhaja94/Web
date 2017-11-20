<?php

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

Route::get('/', function () {
    return view('welcome');
});


//registering a a simpe new route
Route::get('/myView', function(){
  return view('myView');
});

//define route for a simple controller
Route::get('/anotherTry', 'UserController@show');
