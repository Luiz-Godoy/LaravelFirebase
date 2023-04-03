<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Firebase\ContactController;

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

Route::get('/', [ContactController::class, 'index']);
Route::get('UserLogin', [ContactController::class, 'login']);
Route::get('UserRegister', [ContactController::class, 'register']);
Route::get('UserEdit', [ContactController::class, 'edit']);
Route::get('UserInfo', [ContactController::class, 'user']);

Route::post('UserRegister', [ContactController::class, 'createUser']);
