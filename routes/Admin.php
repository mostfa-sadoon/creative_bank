<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\Auth\CustomAuthController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\FieldController;
use App\Http\Controllers\Admin\IdeaController;
use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\Admin\CommonquestionController;
use App\Http\Controllers\Admin\employeecontroller;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\VoteController;
use App\Http\Controllers\Admin\ClassificationController;
use App\Http\Controllers\Admin\userController;
use App\Http\Controllers\Admin\NewCategories;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Setting;

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
    //profile
    Route::get('/profile', [ProfileController::class, 'index'])->name('profile.index');
    Route::post('/profile/update', [ProfileController::class, 'update'])->name('profile.update');
    // category routes
    Route::get('/category', [CategoryController::class, 'index'])->name('category.index');
    Route::get('/category/create', [CategoryController::class, 'create'])->name('category.create');
    Route::post('/category/store', [CategoryController::class, 'store'])->name('category.store');
    Route::get('/category/edit/{id}', [CategoryController::class, 'edit'])->name('category.edit');
    Route::get('/category/show/{id}', [CategoryController::class, 'show'])->name('category.show');
    Route::post('/category/update', [CategoryController::class, 'update'])->name('category.update');
    Route::post('/category/destroy', [CategoryController::class, 'destroy'])->name('category.destroy');
    //user
    Route::get('/user', [userController::class, 'index'])->name('user.index');
    // fildes routes
    Route::controller(FieldController::class)->group(function(){
        Route::get('/field','index')->name('field.index');
        Route::get('/field/create','create')->name('field.create');
        Route::post('/field/store','store')->name('field.store');
        Route::get('/field/edit/{id}','edit')->name('field.edit');
        Route::get('/field/show/{id}','show')->name('field.show');
        Route::post('/field/update','update')->name('field.update');
        Route::post('/field/destroy','destroy')->name('field.destroy');
    });
      // NewCategory routes
      Route::controller(NewCategories::class)->group(function(){
        Route::get('/NewCategory','index')->name('NewCategory.index');
        Route::get('/NewCategory/create','create')->name('NewCategory.create');
        Route::post('/NewCategory/store','store')->name('NewCategory.store');
        Route::get('/NewCategory/edit/{id}','edit')->name('NewCategory.edit');
        Route::post('/NewCategory/update','update')->name('NewCategory.update');
        Route::get('/NewCategory/destroy/{id}','destroy')->name('NewCategory.destroy');
    });
     // fildes classification
    Route::controller(ClassificationController::class)->group(function(){
        Route::get('/classification','index')->name('classification.index');
        Route::get('/classification/create','create')->name('classification.create');
        Route::post('/classification/store','store')->name('classification.store');
        Route::get('/classification/edit/{id}','edit')->name('classification.edit');
        Route::post('/classification/update','update')->name('classification.update');
        Route::post('/classification/destroy','destroy')->name('classification.destroy');
    });
    // ideas
    Route::controller(IdeaController::class)->group(function(){
        Route::get('/ideas','index')->name('idea.index');
        Route::get('/ideas/email','email')->name('idea.email');
        Route::get('/ideas/accepted', 'accepted')->name('idea.accepted');
        Route::get('/ideas/refused', 'getrefused')->name('idea.getrefused');
        Route::get('/ideas/show/{id}', 'show')->name('idea.show');
        Route::get('/ideas/accept/{id}','accept')->name('idea.accept');
        Route::get('/ideas/refused/{id}', 'refused')->name('idea.refused');
        Route::get('/ideas/delete/{id}','destroy')->name('idea.delete');
        Route::get('/ideas/trash', 'trash')->name('idea.trash');
        Route::get('/idea/trash/{id}', 'maketrash')->name('idea.trashed');
        Route::get('/ideas/trash/{id}','showtrashed')->name('idea.trash.view');
        Route::get('/ideas/restore/{id}', 'restore')->name('idea.restore');
    });
    //vote
    Route::controller(VoteController::class)->group(function(){
        Route::get('/vote','index')->name('vote.index');
        Route::get('/vote/create','create')->name('vote.create');
        Route::post('/vote/store','store')->name('vote.store');
        Route::get('/vote/delete/{id}','delete')->name('vote.delete');
        Route::get('/vote/end/{id}','endvote')->name('vote.end');
    });
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
    Route::get('/suggestions', [ContactController::class, 'index'])->name('admin.suggestions');
    Route::get('/suggestions/{contact}', [ContactController::class, 'show'])->name('suggestions.show');
    Route::delete('/suggestions/delete/{contact}', [ContactController::class, 'destroy'])->name('suggestions.destroy');

    Route::group(['middleware' => ['role:Super-Admin']], function () {
        //
        Route::get('/employees', [employeecontroller::class, 'index'])->name('employees');
        Route::get('/employee/create', [employeecontroller::class, 'create'])->name('employee.create');
        Route::post('/employee/store', [employeecontroller::class, 'store'])->name('employee.store');
        Route::get('/employee/delete/{id}', [employeecontroller::class, 'delete'])->name('employee.delete');
        Route::get('/employee/edite/{id}', [employeecontroller::class, 'edit'])->name('employee.edit');
        Route::post('/employee/update', [employeecontroller::class, 'update'])->name('employee.update');
    });

    //setting
       Route::controller(Setting::class)->group(function(){
           //owner
           Route::get('/owner','index')->name('owner.index');
           Route::get('/owner/edit/{id}','edit')->name('owner.edit');
           Route::post('/owner/update','update')->name('owner.update');
           //about
           Route::get('/about/fekrtk','about')->name('fekrtk.about');
           Route::get('/about/edit/{id}','aboutedit')->name('about.edit');
           Route::post('/fekrtk/update','aboutUpdate')->name('fekrtk.update');
       });
});
Route::get('change_lang/{lang}', [HomeController::class,'change_lang'])->name('change_lang');

//Contact Us


