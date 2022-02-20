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
    Route::get('idea/show', [IdeaController::class, 'show']);

    Route::group(['middleware' => ['jwt.verify']], function() {
            Route::controller(IdeaController::class)->group(function(){
                Route::get('ideaForm','index');
                Route::post('ideastore','store');
            });
            Route::controller(ProfileController::class)->group(function(){
                Route::get('profile','index');
                Route::post('profileUpdateImg','update_img');
                Route::get('updateform','updateform');
                Route::post('profileUpdateInfo','update');
                Route::post('updatepassword','updatepassword');
            });
            Route::controller(LikeController::class)->group(function(){
                Route::post('/idea/like','like');
                Route::post('/idea/unlike','unlike');
            });
    });

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
