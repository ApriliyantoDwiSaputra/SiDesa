<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ResidentController;

Route::get('/', [LoginController::class, 'showLoginPage'])->name('login');
Route::post('/', [LoginController::class, 'prosesLogin']);
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/dashboard', function () {
    return view('pages.dashboard');
});

Route::resource('/resident', ResidentController::class);