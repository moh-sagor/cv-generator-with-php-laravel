<?php

use App\Http\Controllers\CvController;
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


Route::get('/', [CvController::class, 'index'])->name('index');
Route::post('/store', [CvController::class, 'store'])->name('store');
Route::get('/showcv', [CvController::class, 'show'])->name('showcv');
Route::get('/viewcv/{id}', [CvController::class, 'view'])->name('viewcv');