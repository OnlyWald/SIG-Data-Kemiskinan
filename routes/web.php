<?php

use App\Http\Controllers\KotaController;
use App\Http\Controllers\FundController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [KotaController::class, 'index']);
Route::post('/store', [FundController::class, 'store']);


