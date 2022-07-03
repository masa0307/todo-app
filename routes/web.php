<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FoldersController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\TasksController;
use App\Http\Controllers\UsersController;

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

Route::get('/', [FoldersController::class,"index"])->name('index')->middleware('auth');
Route::get('/folders', [FoldersController::class,"folder"])->name('folders')->middleware('auth');
Route::post('/folders/create', [FoldersController::class,"create"])->name('folders.create')->middleware('auth');

Route::get('/tasks/{id}', [TasksController::class,"task"])->name('tasks')->middleware('auth');
Route::get('/folders/{id}/tasks', [TasksController::class,"show"])->name('tasks.show')->middleware('auth');
Route::get('/tasks/{id}/edit', [TasksController::class,"edit"])->name('tasks.edit')->middleware('auth');
Route::patch('/tasks/update', [TasksController::class,"update"])->name('tasks.update')->middleware('auth');
Route::post('/tasks/create', [TasksController::class,"create"])->name('tasks.create')->middleware('auth');

Route::get('/users/register', [UsersController::class,"register"])->name('users.register');
Route::post('/users/create', [UsersController::class,"create"])->name('users.create');

Route::get('/menu', [MenuController::class, "menu"])->name('menu');

Route::post('/login', [AuthController::class,"login"])->name('login');
Route::get('/logout', [AuthController::class,"logout"])->name('logout');





