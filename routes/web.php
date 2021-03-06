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
Route::resource('status', \App\Http\Controllers\StatusController::class);
Route::resource('adminPosts', \App\Http\Controllers\AdminPostsController::class);
Route::resource('vipPosts', \App\Http\Controllers\VipPostsController::class);
Route::resource('tests', \App\Http\Controllers\DepressionController::class);
Route::resource('relationship', \App\Http\Controllers\RelationshipsController::class);
Route::resource('tired', \App\Http\Controllers\TiredController::class);
Route::resource('mutes', \App\Http\Controllers\unmuteRequestsController::class);
Route::resource('bans', \App\Http\Controllers\unbanRequestsController::class);

Route::post('create', 'PostsController@store');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Auth::routes();

Route::get('/dashboard', [App\Http\Controllers\HomepageController::class, 'send'])->name('dashboard');
Route::get('/profile', [App\Http\Controllers\HomeController::class, 'profile'])->name('profile');
Route::get('/admin', [App\Http\Controllers\HomeController::class, 'admin'])->name('admin');
Route::get('/vip', [App\Http\Controllers\HomeController::class, 'vip'])->name('vip');
Route::get('/adminUsers', [App\Http\Controllers\HomeController::class, 'adminUsers'])->name('adminUsers');
Route::get('/adminVip', [App\Http\Controllers\HomeController::class, 'adminVip'])->name('adminVip');
Route::get('/vipMutes', [App\Http\Controllers\HomeController::class, 'vipMutes'])->name('vipMutes');
Route::get('/vipBans', [App\Http\Controllers\HomeController::class, 'vipBans'])->name('vipBans');
Route::get('/adminPosts', [App\Http\Controllers\AdminPostsController::class, 'index'])->name('adminPosts');
Route::get('/homepageEdit', [App\Http\Controllers\HomepageController::class, 'index'])->name('homepage');
Route::get('/depressionTest', [App\Http\Controllers\HomeController::class, 'depressionTest'])->name('depressionTest');
Route::get('/relationshipTest', [App\Http\Controllers\HomeController::class, 'relationshipTest'])->name('relationshipTest');
Route::get('/tiredTest', [App\Http\Controllers\HomeController::class, 'tiredTest'])->name('tiredTest');
Route::get('/posts/{id}/like', [App\Http\Controllers\LikesController::class, 'like'])->name('like');
Route::get('/posts/{id}/read', [App\Http\Controllers\ReadsController::class, 'read'])->name('read');
Route::get('/posts/{id}/report', [App\Http\Controllers\ReportsController::class, 'report'])->name('report');
Route::get('/vip/{id}/ban', [App\Http\Controllers\BansController::class, 'ban'])->name('ban');
Route::get('/vip/{id}/unban', [App\Http\Controllers\BansController::class, 'unban'])->name('unban');
Route::get('/vip/{id}/mute', [App\Http\Controllers\MutesController::class, 'mute'])->name('mute');
Route::get('/vip/{id}/unmute', [App\Http\Controllers\MutesController::class, 'unmute'])->name('unmute');
