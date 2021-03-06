<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [App\Http\Controllers\PagesController::class, 'index'])->name('home');
Route::get('/apply', [App\Http\Controllers\PagesController::class, 'apply'])->name('apply');
Route::get('/application', [App\Http\Controllers\PagesController::class, 'application'])->name('application');
Route::post('/submit-application', [App\Http\Controllers\ApplicationController::class, 'store'])->name('submit-application');



Auth::routes();

Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');
Route::get('/application/{id}', [App\Http\Controllers\DashboardController::class, 'show'])->name('show');
Route::DELETE('/application/{id}', [App\Http\Controllers\DashboardController::class, 'destroy'])->name('destroy');



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
