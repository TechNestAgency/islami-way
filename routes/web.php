<?php

use Illuminate\Support\Facades\Route;


Route::get('/',[\App\Http\Controllers\WebsiteController::class,'index'])->name('website.index'); // Arabic default
Route::get('/en',[\App\Http\Controllers\WebsiteController::class,'indexEn'])->name('website.index.en'); // English version
Route::get('/dashboard',[\App\Http\Controllers\WebsiteController::class,'dashboard'])->name('website.dashboard');
Route::get('/enrolls',[\App\Http\Controllers\WebsiteController::class,'enrolls'])->name('enrolls');
Route::post('/enrolls',[\App\Http\Controllers\WebsiteController::class,'store'])->name('enrolls.store');
