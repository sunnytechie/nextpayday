<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\CsvImportController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
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

Route::post('/auth-login', [LoginController::class, 'authLogin'])->name('auth.login')->middleware('guest');

Route::get('/', [DashboardController::class, 'index'])->name('index.home')->middleware('auth', 'redirectOnRole');
Route::get('/dashboard', [DashboardController::class, 'index'])->name('index')->middleware('auth', 'redirectOnRole');
Route::get('/admin-dashboard', [DashboardController::class, 'admin'])->name('admin')->middleware('auth', 'is_admin');
Route::get('/user-dashboard', [DashboardController::class, 'user'])->name('user')->middleware('auth', 'is_user');

Route::post('/import-csv', [CsvImportController::class, 'store'])->name('import.csv')->middleware('auth', 'is_user');

//Route::middleware('auth')->group(function () {
//    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
//});

require __DIR__.'/auth.php';
