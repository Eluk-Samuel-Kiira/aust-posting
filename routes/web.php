<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Home\{ HomeController };

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/jobs', [HomeController::class, 'jobs'])->name('jobs.index');
Route::get('/jobs/show-1', [HomeController::class, 'showJobs'])->name('jobs.show');

