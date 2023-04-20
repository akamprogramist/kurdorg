<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AdminLocalController;
use App\Http\Controllers\FavoriteLocalController;
use Inertia\Inertia;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
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
})->name('home');



Route::get('localNGOs', [LocalController::class, 'index'])->name('localNGOs');
Route::get('localNGOs/manage', [LocalController::class, 'manage'])->middleware('auth');
Route::get('localNGOs/create', [LocalController::class, 'create'])->middleware('auth');
Route::post('localNGOs', [LocalController::class, 'store']);
Route::get('localNGOs/{local}', [LocalController::class, 'show']);
Route::get('localNGOs/{local}/edit', [LocalController::class, 'edit'])->middleware('auth');
Route::post('localNGOs/{local}', [LocalController::class, 'update']);
Route::delete('localNGOs/{local}', [LocalController::class, 'destroy'])->middleware('auth');


Route::get('/register', [UserController::class, 'create']);
Route::post('/users', [UserController::class, 'store']);
Route::get('/users/manage', [UserController::class, 'manage'])->middleware('auth', 'is_admin');
Route::get('/login', [UserController::class, 'login'])->name('login');
Route::post('/users/authenticate', [UserController::class, 'authenticate']);
Route::delete('/users/{user}', [UserController::class, 'destroy']);
Route::delete('/logout', [UserController::class, 'logout']);

Route::post('/favorite/{id}', [FavoriteLocalController::class, 'addFavorite']);
Route::delete('/favorite/{id}', [FavoriteLocalController::class, 'removeFavorite']);

Route::get('/dashboard', function () {
    return Inertia::render('AdminPages/Dashboard');
})->middleware('auth');


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
