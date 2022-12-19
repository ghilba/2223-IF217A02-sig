<?php

use App\Http\Controllers\DestinationController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsController;
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

Route::get('/', [HomeController::class, 'home']);
Route::get('/news', [HomeController::class, 'news']);



Route::resource('dashboard/destination', DestinationController::class);
Route::resource('dashboard/news', NewsController::class);

// Route::get('/berita', function () {
//     return view('berita');
// });

Route::get('/destinasi', function () {
    return view('destinasi');
});

Route::get('/kontak', function () {
    return view('kontak');
});

Route::get('/masuk', function () {
    return view('masuk');
});

Route::get('/profile', function () {
    return view('profile');
});

// Route::get('/', [MapController::class, 'index']);


