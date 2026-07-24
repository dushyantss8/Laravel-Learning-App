<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);
Route::get('/jobs', [App\Http\Controllers\HomeController::class, 'jobs']);
Route::get('/jobs/{id}', [App\Http\Controllers\HomeController::class, 'job']);
Route::get('/contact', [App\Http\Controllers\HomeController::class, 'contact']);