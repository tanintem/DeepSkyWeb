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
    return view('home');
});

Route::get('/home','ImgControl@show');


Route::get('/RealTime{num}','ImgControl@showReal');

Route::get('/Prediction{num}','ImgControl@showPredict');

Route::get('/compare{real_time}-{pred_time}','ImgControl@showCompare');


