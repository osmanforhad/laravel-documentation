<?php

use App\Http\Controllers\Example\FirstController;
use App\Http\Controllers\Example\SecondController;
use App\Http\Controllers\InvokableController;
use App\Repositories\Test;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Fresh Route
|--------------------------------------------------------------------------

*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/laravel', function () {
    return view('zila');
})->middleware('auth');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';


/*
|--------------------------------------------------------------------------
| Basis Testing Routes
|--------------------------------------------------------------------------
|
*/

Route::get('/about', function () {
    return view('about');
//    return redirect('/contact');
});

// Route::view('/about', 'about');

Route::get('/contact', [FirstController::class, 'index'])->name('contact.us');

//__CSRF token and post method for data store__//
Route::post('/teacher/store', [FirstController::class, 'Teacherstore'])->name('teacher.store');
Route::post('/about/store', [FirstController::class, 'Aboutstore'])->name('about.store');

Route::get('/testone', [SecondController::class, 'test']);

Route::any('/profile', function () {
    // return "This is Profile Route by using any method";
    // Log::info('This is your age'.rand(1,30));
    // return redirect()->to('/');
    $logfile = file(storage_path().'/logs/about.log');
    $logcollection = [];
    foreach($logfile as $line_number => $line){
        $logcollection[] = array('line' => $line_number, 'content' => htmlspecialchars($line));
    }
    dd($logcollection);
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

//Middlware Route
Route::get('/country', function() {
    return view('country');
})->middleware('country');


//__Route for Session__//
Route::get('/session-test', function(Request $request) {
    $request->session()->put('age', '28');
    // session(['name' => 'osman']);
    // $request->session()->all();
});
Route::get('/session-all', function(Request $request) {
  return  $request->session()->all();
//  return $request->session()->flash('status', 'Task was successful!');
});