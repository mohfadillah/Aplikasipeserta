<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('register', [App\Http\Controllers\LoginController::class, 'Register'])->name('register');
Route::get('login', [App\Http\Controllers\LoginController::class, 'Login'])->name('login');
Route::post('postRegister', [App\Http\Controllers\LoginController::class,'postRegister'])->name('postRegister');
Route::post('postLogin', [App\Http\Controllers\LoginController::class,'postLogin'])->name('postLogin');

Route::get('home', [App\Http\Controllers\HomeController::class, 'index']);
Route::resource('jurusan', App\Http\Controllers\JurusanController::class);