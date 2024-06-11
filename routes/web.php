<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthenController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/ 

// Home route
Route::get('/', [HomeController::class, 'home']);

// Event registration
Route::get('/register-event', [HomeController::class, 'registerEvent'])->middleware('isLoggedIn')->name('register-event');

// Authentication routes
Route::get('/login', [AuthenController::class, 'login'])->middleware('alreadyLoggedIn')->name('login');
Route::get('/registration', [AuthenController::class, 'registration'])->middleware('alreadyLoggedIn');
Route::post('/login-user', [AuthenController::class, 'loginUser'])->name('login-user'); 
Route::post('/registration-user', [AuthenController::class, 'registerUser'])->name('register-user');
Route::get('/logout', [AuthenController::class, 'logout'])->middleware('isLoggedIn');

// Admin routes
Route::prefix('admin')->middleware(['isLoggedIn', 'admin'])->group(function () {
    Route::get('/dashboard', [AuthenController::class, 'dashboard']);
    Route::get('/events', [AuthenController::class, 'dashboardEvents']);
    Route::get('/members', [AuthenController::class, 'members']);
    Route::get('/eventDetail', [AuthenController::class, 'eventDetail']);
    Route::get('/updateEvent', [AuthenController::class, 'editEvent'])->name('edit-event');
    Route::get('/deleteEvent', [AuthenController::class, 'deleteEvent']);
    Route::post('/updateEvent', [AuthenController::class, 'updateEvent'])->name('updateEvent');
    Route::post('/add-event', [AuthenController::class, 'createEvent'])->name('add-event');
    Route::get('/logout', [AuthenController::class, 'logout']);
});
