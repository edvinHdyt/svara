<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


// Route::get("lorem", function(){
//     return "Test";
// });
Route::get('/', [DashboardController::class, 'show'])->name('route.dashboard_view');
Route::get('/profile', [ProfileController::class, 'show'])->name("route.profile_view");


