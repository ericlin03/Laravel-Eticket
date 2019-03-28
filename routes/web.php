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

//Route::get('/', function () {
  //  return view('welcome');
//});
Route::get('/','Controller@welcome');


Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/activity8', 'HomeController@activity8');

Route::get('/problem',function(){
    return view('problem');
});
Route::get('/clause',function(){
  return view('clause');
});
Route::get('/news',function(){
  return view('news');
});

Route::get('/order', 'HomeController@personalorder');

Route::get('/index',function(){
  return view('index');
});

Route::get('/resale',function(){
  return view('resale');
});

Route::get('/view',function(){
  return view('view');
});

Route::get('/resale-index', function(){
  return view('resale-index');
});

Route::get('/allactivity','Controller@allactivity');


Route::get('/aboutus',function(){
  return view('aboutus');
});

Route::get('/payment-step1', 'HomeController@pay');

Route::get('/payment-step2', 'HomeController@pay2');