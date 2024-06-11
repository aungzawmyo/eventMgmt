<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthenController;
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
 
Route::get('/', [HomeController::class, 'home']);
Route::get('/register-event',[HomeController::class, 'registerEvent'])->middleware('isLoggedIn')->name("register-event");

Route::get('/login',[AuthenController::class, 'login'])->middleware('alreadyLoggedIn')->name('login');//
Route::get('/registration',[AuthenController::class, 'registration'])->middleware('alreadyLoggedIn');
Route::post('/login-user',[AuthenController::class, 'loginUser'])->name('login-user'); 
Route::post('/registration-user',[AuthenController::class, 'registerUser'])->name('register-user');
Route::get('/logout',[AuthenController::class, 'logout'])->middleware('isLoggedIn');

Route::prefix('admin')->group(function () { 
    Route::controller(AuthenController::class)->group(function () { 
        
            Route::middleware(['admin'])->group(function () { 
                Route::get('/dashboard',[AuthenController::class, 'dashboard'])->middleware('isLoggedIn');
                Route::get('/events',[AuthenController::class, 'dashboardEvents'])->middleware('isLoggedIn');
                Route::get('/members',[AuthenController::class, 'members'])->middleware('isLoggedIn');
                Route::get('/eventDetail',[AuthenController::class, 'eventDetail'])->middleware('isLoggedIn');
                Route::get('/updateEvent',[AuthenController::class, 'editEvent'])->name('edit-event');
                Route::get('/deleteEvent',[AuthenController::class, 'deleteEvent'])->middleware('isLoggedIn');
                Route::post('/updateEvent',[AuthenController::class, 'updateEvent'])->name('updateEvent');
                Route::post('/add-event',[AuthenController::class, 'createEvent'])->name("add-event");
                Route::get('/logout',[AuthenController::class, 'logout'])->middleware('isLoggedIn');
            });

    });
});
 
