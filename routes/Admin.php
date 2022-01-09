<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\Auth\CustomAuthController;
use App\Http\Controllers\Admin\CategoryController; 
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\FieldController;

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
    Route::get('login', [CustomAuthController::class, 'index'])->name('login');
    Route::post('custom-login', [CustomAuthController::class, 'customLogin'])->name('login.custom'); 
    Route::get('registration', [CustomAuthController::class, 'registration'])->name('register-user');
    Route::post('custom-registration', [CustomAuthController::class, 'customRegistration'])->name('register.custom'); 

    Route::middleware('auth:Admin')->group(function () {
   
    Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');
    Route::get('dashboard', [CustomAuthController::class, 'dashboard']); 
    
    // category routes
    Route::get('/category', [CategoryController::class, 'index'])->name('category.index'); 
    Route::get('/category/create', [CategoryController::class, 'create'])->name('category.create'); 
    Route::post('/category/store', [CategoryController::class, 'store'])->name('category.store'); 
    Route::get('/category/edit/{id}', [CategoryController::class, 'edit'])->name('category.edit'); 
    Route::get('/category/show/{id}', [CategoryController::class, 'show'])->name('category.show'); 
    Route::post('/category/update', [CategoryController::class, 'update'])->name('category.update'); 
    Route::post('/category/destroy', [CategoryController::class, 'destroy'])->name('category.destroy'); 



    // fildes routes
    Route::get('/field', [FieldController::class, 'index'])->name('field.index'); 
    Route::get('/field/create', [FieldController::class, 'create'])->name('field.create'); 
    Route::post('/field/store', [FieldController::class, 'store'])->name('field.store'); 
    Route::get('/field/edit/{id}', [FieldController::class, 'edit'])->name('field.edit'); 
    Route::get('/field/show/{id}', [FieldController::class, 'show'])->name('field.show'); 
    Route::post('/field/update', [FieldController::class, 'update'])->name('field.update'); 
    Route::post('/field/destroy', [FieldController::class, 'destroy'])->name('field.destroy'); 
});
Route::get('change_lang/{lang}', [HomeController::class,'change_lang'])->name('change_lang');