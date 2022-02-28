<?php

use Illuminate\Support\Facades\Route;



Route::get('/', 'App\Http\Controllers\TemplateController@index');
Route::get('/About', 'App\Http\Controllers\TemplateController@about');
Route::get('/contactUs', 'App\Http\Controllers\TemplateController@contactUs');
