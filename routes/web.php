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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware('auth')->prefix('/admin')->name('admin.')->group(function () {

    // Routes for Teams
    Route::resource('/teams', App\Http\Controllers\Admin\TeamController::class);

    // Routes for Coaches
    Route::resource('/coaches', App\Http\Controllers\Admin\CoachController::class);

    // Routes for Players
    Route::resource('/players', App\Http\Controllers\Admin\PlayerController::class);
});

