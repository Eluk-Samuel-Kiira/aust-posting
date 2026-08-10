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


Route::get('/pages/{slug}', [HomeController::class, 'show'])->name('pages.show');

// Direct routes for common pages (optional - redirects to slug-based routes)
Route::get('pages/about', function () {
    return redirect()->route('pages.show', 'about');
})->name('about');

Route::get('pages/contact', function () {
    return redirect()->route('pages.show', 'contact');
})->name('contact');

Route::get('pages/privacy-policy', function () {
    return redirect()->route('pages.show', 'privacy-policy');
})->name('privacy');

Route::get('pages/terms-conditions', function () {
    return redirect()->route('pages.show', 'terms-conditions');
})->name('terms');



// Authentication pages
Route::get('/register/employer', function () {
    return view('auth.register-employer');
})->name('register.employer');

Route::get('/login', function () {
    return view('auth.login-register');
})->name('login');

Route::get('/register', function () {
    return view('auth.login-register');
})->name('register');

Route::get('/contact', function () {
    return view('pages.contact');
})->name('contact');





// /sitemaps/au/sitemap.xml
Route::get('/sitemaps/{country}/{filename}', function ($country, $filename) {
    $country = strtolower($country);
    // \Log::info($country);
    $mainAppUrl = config('app.main_app_url');
    $sitemapUrl = $mainAppUrl . "/sitemaps/{$country}/{$filename}";
    
    try {
        $response = Http::timeout(30)->get($sitemapUrl);
        
        if (!$response->successful()) {
            abort(404);
        }
        
        return response($response->body(), 200)
            ->header('Content-Type', 'application/xml');
    } catch (\Exception $e) {
        abort(404);
    }
})->where('filename', '.*\.xml$');