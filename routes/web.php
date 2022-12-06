<?php

use App\Http\Controllers\DestinationController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsController;
use Illuminate\Support\Facades\DB;

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

Route::get('/', [HomeController::class, 'index']);
Route::resource('/destination', DestinationController::class);

Route::resource('/dashboard/news', NewsController::class);


require __DIR__.'/auth.php';

Route::get('/news', function(){
    $news = DB::table('news')->simplePaginate(3);
    return view('berita', [
        'news' => $news,
    ]);
});