<?php

use Illuminate\Support\Facades\Route;


Route::get('/',[\App\Http\Controllers\WebsiteController::class,'index'])->name('website.index'); // English default
Route::get('/dashboard',[\App\Http\Controllers\WebsiteController::class,'dashboard'])->name('website.dashboard');
Route::get('/enrolls',[\App\Http\Controllers\WebsiteController::class,'enrolls'])->name('enrolls');
Route::post('/enrolls',[\App\Http\Controllers\WebsiteController::class,'store'])->name('enrolls.store');
