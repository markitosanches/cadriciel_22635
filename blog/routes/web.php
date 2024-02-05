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

use App\Http\Controllers\TaskController ;

Route::get('/tasks', [TaskController::class, 'index'])->name('task.index');


//https://startbootstrap.com/theme/clean-blog