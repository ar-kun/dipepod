<?php

use App\Http\Controllers\DashboardNewsController;
use App\Http\Controllers\DashboardUmkmController;
use App\Http\Controllers\DashboardWisataController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UmkmController;
use App\Http\Controllers\WisataController;
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

Route::get('/', [MainController::class, 'home']);
Route::get('/profile', [MainController::class, 'profile']);

Route::get('/wisata', [WisataController::class, 'wisata'])->middleware('auth');

Route::get('/umkm', [UmkmController::class, 'umkm']);
Route::get('/umkm/{umkm:slug}', [UmkmController::class, 'details']);

Route::get('/news', [NewsController::class, 'news']);
Route::get('/news/{news:slug}', [NewsController::class, 'readnews']);
Route::get('/categories', [MainController::class, 'categories']);

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);
Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/dashboard', [MainController::class, 'dashboard'])->middleware('auth');

Route::get('/dashboard/news/checkSlug', [DashboardNewsController::class, 'checkSlug'])->middleware('auth');
Route::resource('/dashboard/news', DashboardNewsController::class)->middleware('auth');

Route::resource('/dashboard/umkm', DashboardUmkmController::class)->except('show')->middleware('is_admin');
Route::resource('/dashboard/wisata', DashboardWisataController::class)->middleware('is_admin');