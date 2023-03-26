<?php

use Inertia\Inertia;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LocalController;
use App\Http\Controllers\InternationalController;

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

Route::get('/', function () {
    return Inertia::render('Welcome');
});
Route::get('/localNGOs', [LocalController::class, 'Index']);
Route::get('/internationalNGOs', [InternationalController::class, 'Index']);
Route::get('/opportunities', function () {
    return Inertia::render('opportunities');
});
Route::get('/call', function () {
    return Inertia::render('call');
});
Route::get('/news', function () {
    return Inertia::render('news');
});
