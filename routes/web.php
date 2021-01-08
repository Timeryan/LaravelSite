<?php

use Illuminate\Support\Facades\Route;


Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



Route::get('/list-record', 'App\Http\Controllers\RecordController@ListRecord')->name('list-record');

Route::get('/list-review', 'App\Http\Controllers\ReviewController@reviews')->name('list-review');

Route::get('/full-record/{id}', 'App\Http\Controllers\RecordController@FullRecord')->name('full-record/{id}');


Route::post('/regForm/review-form', 'App\Http\Controllers\ReviewController@ReviewPost')->name('review-form');

Route::post('/listPlaces/search-record',
    'App\Http\Controllers\RecordController@SearchRecord')->name('search-record');

Route::post('/list-record/post_record',
    'App\Http\Controllers\RecordController@PostRecord')->name('post_record');
