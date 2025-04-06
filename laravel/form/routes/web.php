<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\form_use;
Route::get('/', function () {
    return view('welcome');
});

Route::view('/form','form');
Route::POST('/hello',[form_use::class,'getinput']);