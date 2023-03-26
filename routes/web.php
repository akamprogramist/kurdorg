<?php

use App\Http\Controllers\InternationalController;
use Inertia\Inertia;
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

Route::get('/', function () {
    return Inertia::render('Welcome');
});
Route::get('/localNGOs', function () {
    return Inertia::render('localNGOs');
});
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
