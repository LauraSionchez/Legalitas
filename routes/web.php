<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;


Route::get('/', function () {
    if (Auth::check()) {
        return redirect('/home');
    } else {
        return view('login.login');
    }
});

Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('login.in');

Route::get('login/{msg?}', [LoginController::class, 'login'])->name('login');
Route::post('login', [LoginController::class, 'login'])->name('login.in');
