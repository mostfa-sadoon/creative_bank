<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\Auth\CustomAuthController;
use App\Http\Controllers\Admin\CategoryController; 
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\FieldController;
use App\Http\Controllers\Admin\IdeaController;
use App\Http\Controllers\Admin\NewsController;   
use App\Http\Controllers\Admin\CommonquestionController;    
use App\Http\Controllers\Admin\suggestionController;
use App\Http\Controllers\Admin\employeecontroller;

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
    Route::get('dashboard', [HomeController::class, 'index'])->name('dashboard');

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
    // ideas
    Route::get('/ideas', [IdeaController::class, 'index'])->name('idea.index'); 
    Route::get('/ideas/show/{id}', [IdeaController::class, 'show'])->name('idea.show'); 
    Route::get('/ideas/accept/{id}', [IdeaController::class, 'accept'])->name('idea.accept'); 
    Route::get('/ideas/refused/{id}', [IdeaController::class, 'refused'])->name('idea.refused'); 
    Route::get('/ideas/delete/{id}', [IdeaController::class, 'destroy'])->name('idea.delete');
    Route::get('/ideas/trash', [IdeaController::class, 'trash'])->name('idea.trash');
    Route::get('/ideas/trash/{id}', [IdeaController::class, 'showtrashed'])->name('idea.trash.view');
    Route::get('/ideas/restore/{id}', [IdeaController::class, 'restore'])->name('idea.restore');
    //news
    Route::get('/news', [NewsController::class, 'index'])->name('news.index'); 
    Route::get('/news/create', [NewsController::class, 'create'])->name('news.create'); 
    Route::post('/news/store', [NewsController::class, 'store'])->name('news.store'); 
    Route::get('/news/show/{id}', [NewsController::class, 'show'])->name('news.show');
    Route::get('/news/show/edit/{id}', [NewsController::class, 'edit'])->name('news.edit');       
    Route::POST('/news/show/update/', [NewsController::class, 'update'])->name('news.update'); 
    Route::get('/news/trash/{id}', [NewsController::class, 'trash'])->name('news.trash');
    Route::get('/news/trash/', [NewsController::class, 'gettrash'])->name('news.gettrash');
    Route::get('/news/show/trashed/{id}', [NewsController::class, 'showtrashed'])->name('news.show.trashed');
    Route::get('/news/delete/{id}', [NewsController::class, 'destroy'])->name('news.delete');
    Route::get('/news/restore/{id}', [NewsController::class, 'restore'])->name('news.restore');
    //common question     
    Route::get('/commonquestions', [CommonquestionController::class, 'index'])->name('commonquestions.index'); 
    Route::get('/commonquestions/create', [CommonquestionController::class, 'create'])->name('commonquestions.create'); 
    Route::post('/commonquestions/create', [CommonquestionController::class, 'store'])->name('commonquestions.store');
    Route::get('/commonquestions/edit/{id}', [CommonquestionController::class, 'edit'])->name('commonquestions.edit'); 
    Route::post('/commonquestions/update', [CommonquestionController::class, 'update'])->name('commonquestions.update');
    Route::get('/commonquestions/delete/{id}', [CommonquestionController::class, 'delete'])->name('commonquestions.delete'); 
    //sugestions
    Route::get('/suggestions/admin/show', [suggestionController::class, 'index'])->name('admin.suggestions');
    Route::group(['middleware' => ['role:Super-Admin']], function () {
        //
        Route::get('/employees', [employeecontroller::class, 'index'])->name('employees');    
        Route::get('/employee/create', [employeecontroller::class, 'create'])->name('employee.create');
        Route::post('/employee/store', [employeecontroller::class, 'store'])->name('employee.store');
        Route::get('/employee/delete/{id}', [employeecontroller::class, 'delete'])->name('employee.delete');
        Route::get('/employee/edite/{id}', [employeecontroller::class, 'edit'])->name('employee.edit');
        Route::post('/employee/update', [employeecontroller::class, 'update'])->name('employee.update');
    });
});
Route::get('change_lang/{lang}', [HomeController::class,'change_lang'])->name('change_lang');