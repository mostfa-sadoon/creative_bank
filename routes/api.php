<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\Auth\AuthController;
use App\Http\Controllers\Api\HomeController; 
use App\Http\Controllers\Api\IdeaController;   
use App\Http\Controllers\Api\ProfileController;
use App\Http\Controllers\Api\LikeController;




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

        Route::get('ideaForm', [IdeaController::class, 'index']);
        Route::post('ideastore', [IdeaController::class, 'store']);
        Route::get('profile', [ProfileController::class, 'index']);
        Route::post('profileUpdateImg', [ProfileController::class, 'update_img']);
        Route::get('updateform', [ProfileController::class, 'updateform']);
        Route::post('profileUpdateInfo', [ProfileController::class, 'update']);
        Route::post('updatepassword', [ProfileController::class, 'updatepassword']);
       
        Route::post('/idea/like',[LikeController::class, 'like']);
        Route::post('/idea/unlike',[LikeController::class, 'unlike']);

    });

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
