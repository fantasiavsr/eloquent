<?php

use Illuminate\Support\Facades\Route;
// use App\Models\data;    // <-- add this line
use App\Http\Controllers\testController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\biodataController;

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

Route::get('/default', [testController::class, 'default']);

// Route::get('/', [testController::class, 'home']);
Route::get('/', [homeController::class, 'home']);

// Route::get('/biodata', [testController::class, 'biodata']);
Route::get('/biodata', [biodataController::class, 'index']);

Route::get('/comment', [testController::class, 'comment']);

Route::get('/login', [testController::class, 'login']);
