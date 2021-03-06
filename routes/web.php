<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\Auth\AuthController;
use App\Http\Controllers\User\IdeaController;
use  App\Http\Controllers\User\Pages\LayoutController;
use App\Http\Controllers\User\HomeController;
use App\Http\Controllers\User\ProfileController;
use App\Http\Controllers\User\NewsController;
use App\Http\Controllers\User\CommonquestionController;
use App\Http\Controllers\Setting;
// use App\Http\Controllers\User\suggestionController;
use App\Http\Controllers\User\VoteController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\User\Auth\forgetPasswordController;

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
    //forget password
    Route::controller(forgetPasswordController::class)->group(function(){
        Route::get('/user/forget/password','index')->name('profile.forget');
        Route::post('/user/forget/sendEmail','sendEmail')->name('sendEmail');
        Route::get('/user/forget/password/sendToken','sendToken')->name('sendToken');
        Route::post('/user/forget/password/submitToekn','submitToekn')->name('submitToekn');
        Route::get('/user/forget/password/update','changepassword')->name('forgetchangepassword');
        Route::post('/user/forget/updatePassword','updatePassword')->name('forget.updatePassword');
    });
    // pages
    Route::get('much/earn', [LayoutController::class, 'index'])->name('much.index');
    // Route::get('about/bank', [LayoutController::class, 'about'])->name('about');
    // Contact Us
    Route::get('contact/us', [ContactController::class, 'create'])->name('contact.create');
    Route::post('contact/us', [ContactController::class, 'store'])->name('contact.store');

    Route::get('suggestions', [LayoutController::class, 'suggestions'])->name('suggestions');
    Route::get('profite', [LayoutController::class, 'profite'])->name('profite');
    //idea
    Route::get('/user/show/idea/{id}',[IdeaController::class, 'show'])->name('user.idea.show');
    Route::get('/user/show/idea',[IdeaController::class, 'allidea'])->name('allidea');
    //profile
    Route::get('/user/profile/show/{id}',[ProfileController::class, 'index'])->name('profile.show');
    //news
    Route::get('/user/news/all',[NewsController::class, 'index'])->name('allnews');
    Route::get('/user/news/{category}',[NewsController::class, 'newsCategory'])->name('newsCategory');
    Route::get('/user/news/show/{id}',[NewsController::class, 'show'])->name('user.news.show');
    //common qustions
    Route::get('/user/commonquestion',[CommonquestionController::class, 'index'])->name('user.commonquestions');

    Route::controller(Setting::class)->group(function(){
        //owner
        // Route::get('/owner','index')->name('owner.index');
        // Route::get('/owner/edit/{id}','edit')->name('owner.edit');
        // Route::post('/owner/update','update')->name('owner.update');
        //about
        Route::get('/about/bank','user_about')->name('about');
        //ContactInfo
        // Route::get('/Info','contactInfo_index')->name('fekrtk.info');
        // Route::get('/Info/edit/{id}','contactInfo_edit')->name('info.edit');
        // Route::post('/Info/update','contactInfo_Update')->name('info.update');
     });


    //suggestion
    // Route::resource('suggestions', suggestionController::class);
    Route::middleware('auth:web')->group(function () {
        //user Auth
        Route::get('signout', [AuthController::class, 'signOut'])->name('user.signout');
        //idea
        Route::get('/createidea',[IdeaController::class, 'create'])->name('idea.create');
        Route::post('/store/idea',[IdeaController::class, 'store'])->name('idea.store');
        Route::post('/idea/like',[IdeaController::class, 'like'])->name('idea.like');
        Route::post('/idea/unlike',[IdeaController::class, 'unlike'])->name('idea.unlike');
        Route::post('/idea/vote',[VoteController::class, 'vote'])->name('idea.vote');
        Route::post('/idea/unvote',[VoteController::class, 'unvote'])->name('idea.unvote');
        //user profile
        Route::controller(ProfileController::class)->group(function(){
            Route::get('/user/profile/edit/{id}','edit')->name('profile.edit');
            Route::post('/user/update','update')->name('user.update');
            Route::get('/user/password/edit','editpassword')->name('user.edit.password');
            Route::post('/user/password/update','updatepassword')->name('password.update');
        });
        // send comment
        Route::post('/user/send/comment',[IdeaController::class, 'sendcomment'])->name('comment.send');
    });

    