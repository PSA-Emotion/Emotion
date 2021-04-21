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
/*
Route::get('/', function () {
    return view('welcome');
});
*/
Route::get('/', function(){      return view('pages.index');      });
Route::get('/first', function(){    return view('pages.first');     });
//Route::get('/profile', 'profile');

Route::resource('posts', \App\Http\Controllers\PostsController::class);
Route::resource('users', \App\Http\Controllers\UsersController::class);
Route::resource('homepage', \App\Http\Controllers\HomepageController::class);
Route::resource('review', \App\Http\Controllers\ReviewsController::class);

Route::post('create', 'PostsController@store');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Auth::routes();

Route::get('/dashboard', [App\Http\Controllers\HomepageController::class, 'send'])->name('dashboard');
Route::get('/profile', [App\Http\Controllers\HomeController::class, 'profile'])->name('profile');
Route::get('/homepageEdit', [App\Http\Controllers\HomepageController::class, 'index'])->name('homepage');
