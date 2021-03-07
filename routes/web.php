<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\PageController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\TournamentController;
use App\Http\Controllers\LeagueController;
use App\Http\Controllers\FacilityController;
use App\Http\Controllers\DashboardController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// ***** Public Routes *****

Route::get('/', [PageController::class, 'homePage'])
	->name('home');

Route::get('/news', [NewsController::class, 'index'])
	->name('news');

Route::get('/tournaments', [TournamentController::class, 'index'])
	->name('tournaments');

Route::get('/leagues', [LeagueController::class, 'index'])
	->name('leagues');

Route::get('/facilities', [FacilityController::class, 'index'])
	->name('facilities');

Route::get('/resources', [PageController::class, 'resourcesPage'])
	->name('resources');

// ***** Private Routes *****

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->name('dashboard');

Route::get('/dashboard', [DashboardController::class, 'dashboardPage'])
	->name('dashboard')
	->middleware('auth');