<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Home\{ HomeController };

// Landing page
Route::get('/', [HomeController::class, 'index'])->name('home');



use App\Http\Controllers\Jobs\{ JobsController, CompaniesController, CategoryController, LocationController };
// Jobs listing
Route::get('/jobs', [JobsController::class, 'jobs'])->name('jobs.index');
// Job detail
Route::get('/jobs/job-detail/{id}', [JobsController::class, 'show'])->name('jobs.show');
// Job application
Route::post('/jobs/{id}/track-application', [JobsController::class, 'trackApplication'])
    ->name('jobs.track-application');


Route::get('/employers', [CompaniesController::class, 'companies'])->name('companies.index');
// Company detail
Route::get('/employers/newest-jobs/{id}', [CompaniesController::class, 'show'])->name('companies.show');
Route::get('/employers/newest-jobs/job-categories/newest-jobs/{id}', [CategoryController::class, 'show'])->name('categories.show');

Route::get('/jobs/location/{slug}', [LocationController::class, 'show'])->name('locations.show');





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


