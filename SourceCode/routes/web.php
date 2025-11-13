<?php

use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


// Route::get("lorem", function(){
//     return "Test";
// });
Route::get('/', [AuthenticationController::class, 'show'])->name('route.login_view');
Route::get('/register', [AuthenticationController::class, 'showRegister'])->name('route.register_view');
Route::get('/dashboard', [DashboardController::class, 'show'])->name('route.dashboard_view');
Route::get('/profile', [ProfileController::class, 'show'])->name("route.profile_view");


