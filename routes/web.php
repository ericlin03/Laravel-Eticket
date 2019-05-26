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
Route::get('/news', 'Controller@post');

Route::get('/order', 'HomeController@personalorder');

Route::get('/transferToOrganizer',function(){
  return view('transferToOrganizer');
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

Route::get('/programs', 'Controller@programs');

Route::get('/resale', 'Controller@resaleList');

Route::get('buyOneTicket', 'HomeController@buyOneTicket');

Route::get('payment', 'HomeController@payment');

Route::post('updateOwner', 'HomeController@updateOwner');

Route::get('resaleTicket', 'HomeController@resaleTicket');

Route::get('resalePayment', 'HomeController@resalePayment');

Route::post('changeOwner', 'HomeController@changeOwner');

Route::get('resaleProcess', 'HomeController@resaleProcess');

Route::post('resaleUpdate', 'HomeController@resaleUpdate');


Route::get('/buyTicket', 'HomeController@buyTicket');

Route::post('getTicket', 'HomeController@getTicket');

Route::get('/withdraw', function () {
  return view('withdraw');
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
Route::get('/buffer', 'mailController@passer');
// Route::redirect('buffer', 'home');
//test

// backhome
Route::get('/backhome', 'BackhomeController@index');
Route::get('/programsmanager','BackhomeController@getData');
Route::get('/delete/{prog_id}','BackhomeController@delete');
//Route::get('edit/{progid}','BackhomeController@show');
//Route::post('edit/{prog_id}','BackhomeController@edit');

Route::post('/edit/update','BackhomeController@update'); 

Route::get('/edit/{prog_id}','BackhomeController@edit'); 

Route::get('/newprogram',function (){
  return view('newprogram');
});

Route::post('insert','BackhomeController@insert');

Route::get('/newpost',function (){
  return view('newpost');
});

Route::post('/insertpost','BackhomeController@insertpost');

Route::get('/deposite', function() {
  return view('deposite');
});

// Route::get('/programsmanager',function (){
//   return view('programsmanager');
// });

// Route::get('/test', function(){
//   return view('test');
// });

// Route::get('test2', 'HomeController@test');

// Route::get('image-upload', 'ImageUploadController@imageUpload')->name('image.upload');

// Route::post('image-upload', 'ImageUploadController@imageUploadPost')->name('image.upload.post');