<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Home\{ HomeController };

// Landing page
Route::get('/', [HomeController::class, 'index'])->name('home');



use App\Http\Controllers\Jobs\{ JobsController };
// Jobs listing
Route::get('/jobs', [JobsController::class, 'jobs'])->name('jobs.index');



// Job detail
Route::get('/jobs/{id}', [HomeController::class, 'show'])->name('jobs.show');

// Job application
Route::post('/jobs/{id}/apply', [HomeController::class, 'apply'])->name('jobs.apply');

// Authentication pages
Route::get('/register/employer', function () {
    return view('auth.register-employer');
})->name('register.employer');

Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::get('/register', function () {
    return view('auth.login-register');
})->name('register');

Route::get('/contact', function () {
    return view('pages.contact');
})->name('contact');


