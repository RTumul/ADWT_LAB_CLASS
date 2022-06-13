<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pageController;
use App\Http\Controllers\customerController;
use App\Http\Controllers\test;

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

Route::get('/', [pageController::class,'home'])->name('home');
Route::get('/customer/create',[customerController::class,'create'])->name('customer.create');
Route::post('/customer/create', [customerController::class,'createSubmit']);
Route::get('/customer/login', [customerController::class,'login'])->name('customer.login');
Route::post('/customer/login', [customerController::class,'loginAuth']);
Route::get('/customer/dashboard', [customerController::class,'dashboard'])->name('customer.dashboard');
Route::get('/test', [test::class,'testDB']);
Route::get('/student/details', [pageController::class, 'student'])->name('student.details');
Route::get('/students',[pageController::class, 'showTableStudent'])->name('public.details');