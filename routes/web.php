<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Authmanager;

Route::get('/welcome', function () {
    return view('welcome');
});
Route::get('/login', [Authmanager::class , 'login'])->name('login');
Route::post('/login', [Authmanager::class , 'loginPost'])->name('login.post');
Route::get('/register', [Authmanager::class , 'register'])->name('register');
Route::post('/register', [Authmanager::class , 'registerPost'])->name('register.post');
Route::get('/logout', [Authmanager::class , 'logout'])->name('logout');
Route::get('/admin', [Authmanager::class , 'admin'])->name('admin')->middleware('admin');
