<?php

use App\Http\Controllers\Example\FirstController;
use App\Http\Controllers\InvokableController;
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

Route::get('/contact', [FirstController::class, 'index'])->name('contact.us');

//__CSRF token and post method for data store__//
Route::post('/teacher/store', [FirstController::class, 'Teacherstore'])->name('teacher.store');
Route::post('/about/store', [FirstController::class, 'Aboutstore'])->name('about.store');

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

//__Route using Invokabke Method__//
Route::get('/testing', InvokableController::class);

Route::get('/dist', [FirstController::class, 'dist'])->name('dist')->middleware('country');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

//Middlware Route
Route::get('/country', function() {
    return view('country');
})->middleware('country');

require __DIR__.'/auth.php';
