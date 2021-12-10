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

Route::get('/about', function () {
    return view('about');
//    return redirect('/contact');
});

// Route::view('/about', 'about');

Route::get('/contact', function () {
    return "This is Contact Route";
});

Route::any('/profile', function () {
    return "This is Profile Route by using any method";
});

Route::match(['get', 'post'], '/portfolio', function () {
    return "This is Portfolio Route by using match method";
});

//Route Paramiter
Route::get('/student/{roll}', function($role) {
    return "My role is: ".$role;
});

//Name Route
Route::get('/team', function () {
    return "This is Team Route for name Route Example";
})->name('our.team');
Route::get('/user', function () {
    return "This is User Route for name Route Example";
})->name('register-user');

//Route Hashing
Route::get(md5('/location'), function () {
    return "This is location Route for route hashing example";
})->name('user-location');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

//Middlware Route
Route::get('/country', function() {
    return view('country');
})->middleware('country');

require __DIR__.'/auth.php';
