<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/blog',[BlogController::class, 'index']);
Route::get('/about',[BlogController::class, 'about']);


//https://startbootstrap.com/theme/clean-blog