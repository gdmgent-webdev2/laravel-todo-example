<?php

use App\Http\Controllers\TaskController;
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

Route::get('/', [TaskController::class, "redirect"]);

// task routes, based on category
Route::get('/categorie/{category}', [TaskController::class, "index"])
    ->name('category.index');
Route::post('/categorie/{category}', [TaskController::class, "store"])
    ->name('category.store');
Route::put('/categorie/{category}', [TaskController::class, "update"])
    ->name('category.update');
Route::delete('/categorie/{category}', [TaskController::class, "delete"])
    ->name('category.delete');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
