<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FoldersController;
use App\Http\Controllers\TasksController;
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

Route::get('/', [FoldersController::class,"index"])->name('index');

Route::get('/folders', [FoldersController::class,"folder"])->name('folders');

// Route::get('/folders/{id}/tasks', [FoldersController::class,"show"])->name('tasks.show');

Route::post('/folders/create', [FoldersController::class,"create"])->name('folders.create');

Route::get('/tasks/{id}', [TasksController::class,"task"])->name('tasks');
Route::get('/folders/{id}/tasks', [TasksController::class,"show"])->name('tasks.show');

Route::get('/tasks/{id}/edit', [TasksController::class,"edit"])->name('tasks.edit');
Route::patch('/tasks/update', [TasksController::class,"update"])->name('tasks.update');


Route::post('/tasks/create', [TasksController::class,"create"])->name('tasks.create');



