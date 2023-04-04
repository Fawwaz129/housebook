<?php

use App\Http\Controllers\HomeController;
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

Route::get('/', [HomeController::class, 'index']);
Route::get('/tasks', [TaskController::class, 'index']);
Route::get('/product', [TaskController::class, 'product']);
Route::get('/tasks/create', [TaskController::class, 'create'])->middleware('is_admin');
Route::get('/tasks/{id}', [TaskController::class, 'show'])->middleware('is_admin');
Route::post('/tasks', [TaskController::class, 'store'])->middleware('is_admin');
Route::get('/tasks/{id}/edit', [TaskController::class, 'edit'])->middleware('is_admin');
Route::patch('/tasks/{id}', [TaskController::class, 'update'])->middleware('is_admin');
Route::delete('/tasks/{id}', [TaskController::class, 'delete'])->middleware('is_admin');
