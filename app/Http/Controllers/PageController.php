<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Models\Tournament;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function welcomePage(Request $request)
    {
    	return Inertia::render('Welcome', [
	    	'tournaments' => Tournament::all(),
	        'canLogin' => Route::has('login'),
	        'canRegister' => Route::has('register'),
	        'laravelVersion' => Application::VERSION,
	        'phpVersion' => PHP_VERSION,
	    ]);
    }
}