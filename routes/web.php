<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TransactionController;
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

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/bookings', [TransactionController::class, 'booking']);
// Route::get('/index', [TransactionController::class, 'index']);
Route::get('/easy', [TransactionController::class, 'getBookingEasy']);
Route::get('/moderate', [TransactionController::class, 'getBookingModerate']);
Route::get('/challenging', [TransactionController::class, 'getBookingChallenging']);
Route::get('/difficult', [TransactionController::class, 'getBookingDifficult']);