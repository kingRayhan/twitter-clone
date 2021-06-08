<?php

use App\Http\Controllers\TweetController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/timeline', [\App\Http\Controllers\TimelineController::class, 'index'])
    ->name('timeline')
    ->middleware('auth');

Route::get('api/timeline', [\App\Http\Controllers\TimelineController::class, 'loadTweets'])
    ->name('api.timeline')
    ->middleware('auth');

Route::post('api/tweets', [TweetController::class, 'store'])
    ->name('tweets.store');


Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__ . '/auth.php';
