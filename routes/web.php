<?php

use Illuminate\Support\Facades\Route;

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

//Routes
Route::get('/', function () {
    return view('home');
});

Route::get('/tasks', function(){
    return view('tasks');
});

Route::get('/aanmelden', function(){
    return view('aanmelden');
});

Route::get('/vergeten', function(){
    return view('vergeten');
});

Route::get('/client', function(){
    return view('client');
});



//Authorized Routes
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
