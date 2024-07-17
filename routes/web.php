<?php

use Illuminate\Support\Facades\Route;

// Frontend
Route::get('/', [App\Http\Controllers\FrontendController::class, 'index'])->name('front.index');

Auth::routes();

// Backend

Route::group(['middleware'=>['auth','role:Admin'],'prefix'=>'backend', 'as'=>'backend.'],function(){
    Route::get('/', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('dashboard');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
