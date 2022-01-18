<?php

use Illuminate\Support\Facades\Route;  
use App\Http\Controllers\User\Auth\AuthController;
use App\Http\Controllers\User\IdeaController;     
use  App\Http\Controllers\User\Pages\LayoutController;
use App\Http\Controllers\User\HomeController; 
use App\Http\Controllers\User\ProfileController;
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
// the home page   momo@gmail.com
Route::get('/',[HomeController::class, 'index'])->name('home');
// login and register  
Route::get('login/user', [AuthController::class, 'index'])->name('user.login');
Route::get('registration/user', [AuthController::class, 'registration'])->name('user.register');
Route::post('register/user', [AuthController::class, 'register'])->name('user.create');
Route::post('signin/user', [AuthController::class, 'login'])->name('user.signin');
Route::get('signout/user', [AuthController::class, 'signout'])->name('user.signout');
// pages
Route::get('much/earn', [LayoutController::class, 'index'])->name('much.index');
Route::get('about/bank', [LayoutController::class, 'about'])->name('about');
Route::get('conect/us', [LayoutController::class, 'conect'])->name('conect');
Route::get('suggestions', [LayoutController::class, 'suggestions'])->name('suggestions'); 
//idea
Route::get('/user/show/idea/{id}',[IdeaController::class, 'show'])->name('user.idea.show');
Route::get('/user/show/idea',[IdeaController::class, 'allidea'])->name('allidea');
//profile
Route::get('/user/profile/show/{id}',[ProfileController::class, 'index'])->name('profile.show');
Route::middleware('auth:web')->group(function () {
    //idea
    Route::get('/createidea',[IdeaController::class, 'create'])->name('idea.create');
    Route::post('/store/idea',[IdeaController::class, 'store'])->name('idea.store');
    //user profile            
    Route::get('/user/profile/edit/{id}',[ProfileController::class, 'edit'])->name('profile.edit');    
    Route::post('/user/update',[ProfileController::class, 'update'])->name('user.update');
    Route::get('/user/password/edit',[ProfileController::class, 'editpassword'])->name('user.edit.password');
    Route::post('/user/password/update',[ProfileController::class, 'updatepassword'])->name('password.update');
    //user Auth
    Route::get('signout', [AuthController::class, 'signOut'])->name('user.signout');
});