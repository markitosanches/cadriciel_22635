<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home',[BlogController::class, 'index']);
Route::get('/about',[BlogController::class, 'about']);
Route::get('/article',[BlogController::class, 'article']);
Route::get('/contact',[BlogController::class, 'contact']);
Route::post('/contact',[BlogController::class, 'contactForm']);


//https://startbootstrap.com/theme/clean-blog