<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TaskController;
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

Route::get("/dashboard", [TaskController::class, "index"])
    ->middleware(["auth", "verified"])
    ->name("dashboard");

Route::middleware('auth')->group(function () {
    Route::prefix('profile')->group(function () {
        Route::controller(ProfileController::class)->group(function () {
            Route::get('/', 'edit')->name('profile.edit');
            Route::patch('/', 'update')->name('profile.update');
            Route::delete('/', 'destroy')->name('profile.destroy');
        });
    });

    Route::prefix('task')->group(function () {
        Route::controller(TaskController::class)->group(function () {
            Route::get('/', 'create')->name('create-task');
            Route::post('/', 'store')->name('task.create');
            Route::get('/{id}', 'edit')->name('task.edit');
            Route::patch('/{id}', 'update')->name('task.update');
            Route::delete('/{id}', 'destroy')->name('task.destroy');
        });
    });
});

require __DIR__ . '/auth.php';
