<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Http\Middleware\HandlePrecognitiveRequests;
use Illuminate\Support\Facades\Route;


// Route::get('/', function(): View {

//     return view('users.index');
// });

Route::resource('auth', AuthController::class)->only([
    'store', 'create'
]);

// Route::get('/auth', [AuthController::class, 'create'])->name('auth.create');
// Route::post('/auth', [AuthController::class, 'store'])->name('auth.store');


Route::resource('users', UserController::class);
