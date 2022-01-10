<?php

use Illuminate\Support\Facades\Route;  
use App\Http\Controllers\User\Auth\AuthController;
use App\Http\Controllers\User\IdeaController;




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

Route::get('/', function () {
    return view('user.home.index');
})->name('home');

Route::get('login/user', [AuthController::class, 'index'])->name('user.login');
Route::get('registration/user', [AuthController::class, 'registration'])->name('user.register');
Route::post('register/user', [AuthController::class, 'register'])->name('user.create');
Route::post('signin/user', [AuthController::class, 'login'])->name('user.signin');
Route::get('signout/user', [AuthController::class, 'signout'])->name('user.signout');

Route::middleware('auth:web')->group(function () {
    Route::get('/createidea',[IdeaController::class, 'create'])->name('idea.create');
    Route::post('/store/idea',[IdeaController::class, 'store'])->name('idea.store');
});