<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BukuController;

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

// Route::get('/', function () {
//     return view('home');
// });

Route::get('/', [BukuController::class, 'index']);
Route::get('/q2', [BukuController::class, 'query2']);
Route::get('/q3', [BukuController::class, 'query3']);
Route::get('/q4', [BukuController::class, 'query4']);
Route::get('/q5', [BukuController::class, 'query5']);
Route::get('/q6', [BukuController::class, 'query6']);
Route::get('/q7', [BukuController::class, 'query7']);
Route::get('/q8', [BukuController::class, 'query8']);
Route::get('/q9', [BukuController::class, 'query9']);