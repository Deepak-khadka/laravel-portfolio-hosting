<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\frontend\HomeController;
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
Route::get('/secure-login', [ LoginController::class, 'showLoginForm'])->name('login');
Route::post('/secure-login', [ LoginController::class, 'attemptLogin'])->name('login');
Route::get('/logout', [ LoginController::class, 'logout'])->name('logout');

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('pages/{pageName}', [HomeController::class, 'getPageName'])->name('get-page-name');

Route::get('/admin/dashboard', [AdminController::class, 'index'])->middleware('auth', 'web')->name('admin.dashboard');