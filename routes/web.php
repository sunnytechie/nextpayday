<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CsvImportController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\ExceptionsController;
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

Route::post('/auth-login', [LoginController::class, 'authLogin'])->name('auth.login')->middleware('guest');

Route::get('/', [DashboardController::class, 'index'])->name('index.home')->middleware('auth', 'redirectOnRole');
Route::get('/dashboard', [DashboardController::class, 'index'])->name('index')->middleware('auth', 'redirectOnRole');
Route::get('/admin-dashboard', [DashboardController::class, 'admin'])->name('admin')->middleware('auth', 'is_admin');
Route::get('/user-dashboard', [DashboardController::class, 'user'])->name('user')->middleware('auth', 'is_user');

Route::get('/import-csv-file', [CsvImportController::class, 'create'])->name('new.csv')->middleware('auth', 'is_user');
Route::post('/import-csv', [CsvImportController::class, 'store'])->name('import.csv')->middleware('auth', 'is_user');

Route::get('/api-records', [DashboardController::class, 'apiRecords'])->name('api.records')->middleware('auth', 'is_admin');

//jobs
Route::get('/jobs', [JobController::class, 'index'])->name('jobs')->middleware('auth', 'is_admin');
Route::post('/jobs/send-email-to-active-users', [JobController::class, 'sendEmailToActiveUsers'])->name('jobs.send.email.to.active.users')->middleware('auth', 'is_admin');

//Exception Handling
Route::get('/404', [ExceptionsController::class, 'notFound'])->name('404');
Route::get('/500', [ExceptionsController::class, 'internalServerError'])->name('500');

//Route::middleware('auth')->group(function () {
//    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
//});

require __DIR__.'/auth.php';
