<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('register', 'AuthController@register');
Route::post('login', 'AuthController@login');
Route::get('rand_exp', 'Testcontroller@rand_exp');



Route::post('register_exp', 'AuthController@register_exp');
Route::get('get_category', 'AuthController@get_category');
