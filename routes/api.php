<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\WorkertController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::group([
    'prefix' => 'auth/admins'
], function ($router) {
    Route::post('/login', [AdminController::class, 'login']);
    Route::post('/register', [AdminController::class, 'register']);
    Route::post('/logout', [AdminController::class, 'logout']);
    Route::post('/refresh', [AdminController::class, 'refresh']);
    Route::get('/user-profile', [AdminController::class, 'userProfile']);
});
Route::group([
    'prefix' => 'auth/workers'
], function ($router) {
    Route::post('/login', [WorkertController::class, 'login']);
    Route::post('/register', [WorkertController::class, 'register']);
    Route::post('/logout', [WorkertController::class, 'logout']);
    Route::post('/refresh', [WorkertController::class, 'refresh']);
    Route::get('/user-profile', [WorkertController::class, 'userProfile']);
});

Route::group([
    'prefix' => 'auth/clients'
], function ($router) {
    Route::post('/login', [ClientController::class, 'login']);
    Route::post('/register', [ClientController::class, 'register']);
    Route::post('/logout', [ClientController::class, 'logout']);
    Route::post('/refresh', [ClientController::class, 'refresh']);
    Route::get('/user-profile', [ClientController::class, 'userProfile']);
});
