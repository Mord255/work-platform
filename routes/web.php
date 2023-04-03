<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PostulantController;
use App\Http\Controllers\JobController;

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

Route::get('/', [UserController::class, 'index'])->name('index');
Route::get('/login', [UserController::class, 'login'])->name('login');
Route::post('/login', [UserController::class, 'loguear'])->name('loguear');
// Route::post('/loguear', [UserController::class, 'loguear'])->name('loguear');

Route::get('/register', [PostulantController::class, 'register'])->name('register');

Route::get('/searchJobs', [JobController::class, 'searchJobs'])->name('searchJobs');
Route::post('/createJob', [JobController::class, 'createJob'])->name('createJob');

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
