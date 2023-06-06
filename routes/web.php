<?php

use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\jRecordsController;
use App\Http\Controllers\StripeController;
use App\Http\Controllers\StudentController;
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


Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/stripe/index',[StripeController::class,'index'])->name('StripeIndex');
Route::post('/stripe/checkout',[StripeController::class, 'checkout'])->name('checkout');
Route::get('/stripe/success',[StripeController::class, 'success'])->name('success');

Route::get('/student/index',[StudentController::class,'index'])->name('studentIndex');
Route::get('/student/create',[StudentController::class,'create'])->name('studentCreate');
Route::post('/student/store',[StudentController::class, 'store'])->name('studentStore');
Route::get('/student/show/{id}',[StudentController::class, 'show'])->name('studentShow');

Route::get('/attendance/index', [AttendanceController::class, 'index'])->name('attendanceIndex');
Route::get('/attendance/create', [AttendanceController::class, 'create'])->name('attendanceCreate');
Route::post('/attendance/store',[AttendanceController::class, 'store'])->name('attendanceStore');
Route::get('/attendance/edit/{id}', [AttendanceController::class, 'edit'])->name('attendanceEdit');
Route::put('/attendance/update/{id}', [AttendanceController::class, 'update'])->name('attendanceUpdate');
Route::get('/attendance/show/{id}', [AttendanceController::class, 'show'])->name('attendanceShow');