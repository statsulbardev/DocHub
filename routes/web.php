<?php

use App\Livewire\Auth\Login;
use App\Livewire\Home;
use Illuminate\Support\Facades\Route;

Route::get('/', fn() => view('welcome'));

Route::get('login', Login::class)->name('login');

Route::group(['middleware' => ['auth']], function() {
    Route::get('beranda', Home::class)->name('home');
});
