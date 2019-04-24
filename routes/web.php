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

Route::get('/resale-example', function(){
return view('resale-example');
});

Route::get('/orders', 'HomeController@orders');

Route::get('/programs', 'HomeController@programs');

Route::get('/resale', 'HomeController@resaleList');

Route::get('buyOneTicket', 'HomeController@buyOneTicket');

Route::get('payment', 'HomeController@payment');

Route::post('updateOwner', 'HomeController@updateOwner');

Route::get('resaleTicket', 'HomeController@resaleTicket');

Route::get('resalePayment', 'HomeController@resalePayment');

Route::get('resaleProcess', 'HomeController@resaleProcess');

Route::post('resaleUpdate', 'HomeController@resaleUpdate');

Route::get('/buyTicket', 'HomeController@buyTicket');
Route::get('/buyTicket', function () {
    return view('buyTicket');
});
// confirm ticket
Route::get('/confirmTicket', 'HomeController@confirmTicket');
// Route::get('/confirmTicket', function () {
//     return view('confirmTicket');
// });
//buying ticket
Route::get('/buyingTicket', 'mailController@send');
Route::get('/buyingTicket', 'HomeController@buyingTicket');
//mail
Route::post('send', 'mailController@send');
Route::get('send', 'mailController@send');
// Route::get('buffer', function () {
//     return view('buffer');
// });
Route::get('buffer', 'mailController@passer');
Route::redirect('buffer', 'home');
//test

Route::get('/test', function(){
  return view('test');
});

Route::get('test2', 'HomeController@test');