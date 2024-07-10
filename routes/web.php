<?php

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

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('landing');
Route::get('/events', [App\Http\Controllers\EventController::class, 'index'])->name('event');
Route::get('/events/{id}', [App\Http\Controllers\EventController::class, 'show'])->name('event.show');

Route::get('/partnership', [App\Http\Controllers\PartnershipController::class, 'index'])->name('partnership');
Route::get('/about', [App\Http\Controllers\AboutController::class, 'index'])->name('about');