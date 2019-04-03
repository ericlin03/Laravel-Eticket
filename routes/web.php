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

Route::get('/view',function(){
  return view('view');
});

Route::get('/resale-example', function(){
  return view('resale-example');
});

Route::get('/allactivity','Controller@allactivity');


Route::get('/aboutus',function(){
  return view('aboutus');
});

Route::get('/payment-step1', 'HomeController@pay');

Route::get('/payment-step2', 'HomeController@pay2');

Route::post('/payment-step2', 'HomeController@updateOwner');

Route::get('/payment-step3', 'HomeController@pay3');

Route::get('/resale-step1', 'HomeController@resale');

Route::get('/resale-step2', 'HomeController@resale2');

Route::get('/orders', 'HomeController@orders');

Route::get('/programs', 'HomeController@programs');