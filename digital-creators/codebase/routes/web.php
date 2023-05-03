<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\WorkController;
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

Route::get('/', [UserController::class, 'index']);

Route::get('profile/{user}', [UserController::class, 'show'])->name('users.show');

Route::middleware('auth')->group(function () {
    Route::get('my-profile', [UserController::class, 'edit'])->name('users.edit');
    Route::post('my-profile', [UserController::class, 'update'])->name('users.update');

    Route::get('my-projects', [WorkController::class, 'index'])->name('work.index');

    Route::get('add-project', [WorkController::class, 'create'])->name('work.create');
    Route::post('add-project', [WorkController::class, 'store'])->name('work.store');

    Route::get('project/{work}', [WorkController::class, 'edit'])->name('work.edit');
    Route::put('project/{work}', [WorkController::class, 'update'])->name('work.update');
    Route::delete('project/{work}', [WorkController::class, 'destroy'])->name('work.destroy');
});

require __DIR__ . '/auth.php';
