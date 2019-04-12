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

// Route::get('/payment-step1', 'HomeController@pay');

// Route::get('/payment-step2', 'HomeController@pay2');

// Route::post('/payment-step2', 'HomeController@updateOwner');

// Route::get('/payment-step3', 'HomeController@pay3');

// Route::get('/resale-step1', 'HomeController@resale');

// Route::get('/resale-step2', 'HomeController@resale2');

// Route::get('/resale-step3', 'HomeController@resale3');

Route::get('/orders', 'HomeController@orders');

Route::get('/programs', 'HomeController@programs');

Route::get('/resale', 'HomeController@resaleList');

Route::get('buyTicket', 'HomeController@buyTicket');

Route::get('payment', 'HomeController@payment');

Route::post('updateOwner', 'HomeController@updateOwner');

Route::get('resaleTicket', 'HomeController@resaleTicket');

Route::get('resalePayment', 'HomeController@resalePayment');

//test

Route::get('/test', function(){
  return view('test');
});

Route::get('test2', 'HomeController@test');