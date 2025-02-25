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
    return redirect()->route('admin.teams.index');
});

Auth::routes();

Route::middleware('auth')->prefix('/admin')->name('admin.')->group(function () {

    // Routes for Teams
    Route::resource('/teams', App\Http\Controllers\Admin\TeamController::class);

    // Routes for Coaches
    Route::resource('/coaches', App\Http\Controllers\Admin\CoachController::class);

    // Routes for Players
    Route::resource('/players', App\Http\Controllers\Admin\PlayerController::class);

    // Routes for Classifica
    Route::resource('/classifics', App\Http\Controllers\Admin\ClassificController::class);

});

