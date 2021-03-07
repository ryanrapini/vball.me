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
	    	'tournaments' => Tournament::all()->load('divisions'),
	        'canLogin' => Route::has('login'),
	        'canRegister' => Route::has('register'),
	    ]);
    }
}
