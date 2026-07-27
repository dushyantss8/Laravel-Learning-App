<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\JobsController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/jobs', [JobsController::class, 'index'])->name('jobs.index');
Route::get('/jobs/create', [JobsController::class, 'create'])->name('jobs.create');
Route::get('/jobs/{id}', [JobsController::class, 'show'])->name('jobs.show');
Route::post('/jobs', [JobsController::class, 'store'])->name('jobs.store');
Route::get('/jobs/{id}/edit', [JobsController::class, 'edit'])->name('jobs.edit');
Route::patch('/jobs/{id}', [JobsController::class, 'update'])->name('jobs.update');
Route::delete('/jobs/{id}', [JobsController::class, 'destroy'])->name('jobs.destroy');
Route::get('/contact', [App\Http\Controllers\HomeController::class, 'contact'])->name('contact');
