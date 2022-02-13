<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\Auth\AuthController;
use App\Http\Controllers\Api\HomeController;




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

    Route::post('login', [AuthController::class, 'login']);
    Route::post('register', [AuthController::class, 'register']);
    Route::get('registerForm', [AuthController::class, 'create']);
    Route::get('Home', [HomeController::class, 'index']);


    Route::group(['middleware' => ['jwt.verify']], function() {
       
    });

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
