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
    // $exitCode = Artisan::call('cache:clear');
    return redirect('/newShow0-0');
});

// Route::get('/newShow{real_time}-{pred_time}',function($real_time,$pred_time){
//     $exitCode = Artisan::call('cache:clear');
//     return redirect()->action('ImgControl@newShow',['real_time'=>1,'pred_time'=>2]);
// });

Route::get('/home','ImgControl@show');


Route::get('/RealTime{num}','ImgControl@showReal');

Route::get('/Prediction','ImgControl@showPredict');

Route::get('/compare{real_time}-{pred_time}','ImgControl@showCompare');

Route::get('/newShow{real_time}-{pred_time}','ImgControl@newShow');

Route::get('/file','test@filesystem');

Route::get('/upload','uploadController@index');
//Route::get('/store','uploadController@storepage');
Route::post('/store','uploadController@store');

Route::get('/slideshow','ImgControl@newShow');

Route::get('/index', function(){
    return view('index');
});