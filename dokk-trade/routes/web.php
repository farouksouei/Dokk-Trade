<?php

use Illuminate\Support\Facades\Route;



Route::get('/', 'App\Http\Controllers\TemplateController@index');
Route::get('/About', 'App\Http\Controllers\TemplateController@About');
Route::get('/Contact Us', 'App\Http\Controllers\TemplateController@ContactUs');
