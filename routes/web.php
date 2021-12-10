<?php

use App\Repositories\Test;
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

Route::get('/', function () {
    return view('welcome');
});


//uses of service helper
Route::get('/test', function () {
    app()->make('first_service_helper');
});

Route::get('/test1', function () {
    return "test";
});

//uses of facades
Route::get('/test2', function () {
    Test::sum();
});

//Another example uses of facades
Route::get('/test3', function () {
    Test::Multifly();
});



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
