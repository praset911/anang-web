<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AnangController;
use App\Http\Controllers\AppController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',[AppController::class,'index'])->name('app.index');
Route::get('/home', [AppController::class, 'indexhome'])->name('app.index');

Auth::routes();

Route::middleware('auth')->group(function(){
    Route::get('/my-account', [UserController::class,'index'])->name('user.index');
});

Route::middleware('auth', 'auth.admin')->group(function(){
    Route::get('/admin', [AdminController::class,'index'])->name('admin.index');
});

Route::get('/horor', [AnangController::class, 'indexhoror']);
Route::get('/next', [AnangController::class, 'index2']);
Route::get('/dashboard', [AnangController::class, 'index3']);
Route::get('/action', [AnangController::class, 'indexaction']);
Route::get('/detail', [AnangController::class, 'indexData']);

Route::get('login/google', [LoginController::class, 'redirectToGoogle'])->name('login.google');
Route::get('login/google/callback', [LoginController::class, 'redirectToGoogleCallback']);