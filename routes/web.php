<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DriversController;
use Illuminate\Http\Request;

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

Route::get('/', [DriversController::class,'download']);

Route::get('/drivers/{id}', [DriversController::class,'show']);