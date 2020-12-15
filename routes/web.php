<?php

use App\Http\Controllers\DestinationController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
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
    return view('home');
})->name('HomePage');
Route::get('/home', function () {
    return view('home');
});
// Route::get('/login', function () {
//     return view('auth.login');
// });
Route::get('/hiburan', function () {
    return view('hiburanpage');
});
Route::get('/Recommender', function () {
    $rekomender = DB::table('destinations')->get();
    return view('recomenderPage', ['rekomender' => $rekomender]);
})->name('Recommender');
Route::get('/admin', function () {
    return view('admin');
});
Route::get('/profile', function () {
    return view('profilePage');
});
Route::get('/artikel', function () {
    return view('Artikel');
});

// Route::resource('/destination', 'DestinationController');

Route::get('/hiburan', function () {
    return view('hiburanpage');
});
Route::get('/register', function () {
    return view('auth.register');
})->name('auth.register');

Route::post('/destinasi', 'DestinationController@store');
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
// Route::name('admin')
//     ->prefix('admin')
//     ->middleware(['auth', 'can:accessdmin'])
//     ->group(function () {
//         Route::get('/admin', '\App\Http\Controllers\Auth\AdminController@index')->name('admin');

//         Route::resource('posts', 'PostController');
//         Route::resource('users', 'UserController');
//     });
