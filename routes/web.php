<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TodoController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [TodoController::class, 'index']);

// Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/tasks', [TodoController::class, 'index'])->name('alltasks');

Route::prefix('task')->group(function () {
    Route::get('/create', [TodoController::class, 'create'])->name('task.create');
    Route::post('/store', [TodoController::class, 'store'])->name('task.store');
    Route::get('/edit/{todo}', [TodoController::class, 'edit'])->name('task.edit');
    Route::put('/update/{todo}', [TodoController::class, 'update'])->name('task.update');
    Route::get('/delet/{todo}', [TodoController::class, 'destroy'])->name('task.delete');
});