<?php

use App\Http\Controllers\jRecordsController;
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

Route::get('/index', [jRecordsController::class, 'index'])->name('index');
Route::post('/list',[jRecordsController::class,'listRecord'])->name('list');
Route::post('/create', [jRecordsController::class, 'createRecord'])->name('create');

