<?php

use App\Http\Controllers\FirstController;
use App\Http\Controllers\UserController;
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

Route::get('/', [FirstController::class, 'homePage']);
Route::get('/about', [FirstController::class, 'aboutPage']);

Route::post('/register', [UserController::class, 'register']);
