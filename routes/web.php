<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\JobsController;

// Home
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');

// Jobs
// Route::controller(JobsController::class)->group(function () {
//     Route::get('/jobs', 'index')->name('jobs.index');
//     Route::get('/jobs/create', 'create')->name('jobs.create');
//     Route::get('/jobs/{job}', 'show')->name('jobs.show');
//     Route::post('/jobs', 'store')->name('jobs.store');
//     Route::get('/jobs/{job}/edit', 'edit')->name('jobs.edit');
//     Route::patch('/jobs/{job}', 'update')->name('jobs.update');
//     Route::delete('/jobs/{job}', 'destroy')->name('jobs.destroy');
// });

Route::resource('jobs', JobsController::class);
