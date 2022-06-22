<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FoldersController;

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

Route::get('/folders/{id}', [FoldersController::class,"show"])->name('folders.show');

Route::post('/folders/create', [FoldersController::class,"create"])->name('folders.create');



