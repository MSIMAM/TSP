<?php

use App\Http\Controllers\Test;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FrontController;
// use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\IndexController;
use App\Http\Controllers\Auth\LoginControllers;
use App\Http\Controllers\Admin\LecturesController;
use App\Http\Controllers\Admin\PermissionController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    notify()->success('welcome');    
    return view('welcome');
});


   //======================= login controlller =======================
   Route::get('/login', [LoginControllers::class, 'login'])->name('front');
   Route::post('redirect', [LoginControllers::class, 'authenticate'])->name('authenticate.login');
//========================== end login routes ==============================================
Auth::routes();

//=============================== front routes ==========================
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('history', [FrontController::class, 'index'])->name('history');
Route::get('lectures', [FrontController::class, 'lectures'])->name('lectures');
// Route::get('/lectures/{lecture}/download', [FrontController::class, 'downloadLecture'])->name('lecture.download');
Route::get('index', [FrontController::class, 'home'])->name('index');
Route::get('tidjaniya', [FrontController::class, 'tidjaniya'])->name('history-tidjaniya');
Route::get('lineage', [FrontController::class, 'lineage'])->name('lineage');
Route::get('faydha', [FrontController::class, 'faydha'])->name('faydha');
Route::get('/audios/list', [FrontController::class, 'getAudios'])->name('audios.getList');

//===============================end front routes ==========================





Route::namespace('App\Http\Controllers\Admin')->name('admin.')->prefix('admin')->middleware('auth')
    ->group(function(){
        Route::get('home', [IndexController::class, 'index'])->name('index');
        Route::resource('roles','RoleController');
        Route::resource('permissions','PermissionController');
        Route::resource('users','UserController');
        Route::resource('posts','PostController');
        Route::resource('users','UserController');
        Route::resource('index','IndexController');
        Route::resource('lectures','LecturesController');

        //================ fetching users record==============================================
        Route::get('users-index', [UserController::class, 'showMembers'])->name('members.show');
        Route::put('/status/{id}', [UserController::class, 'updateStatus'])->name('status');
        Route::get('update-profile{uuid}', [IndexController::class, 'edit'])->name('edit');
        Route::get('update-user', [IndexController::class, 'updateUser'])->name('updateUser');
        Route::put('update', [IndexController::class, 'update'])->name('update');
        Route::get('/users/{user}/delete', [UserController::class, 'destroy'])->name('user.destroy');
        //================End fetching users record==============================================


});

        // Route::get('lectures', [Admin\LecturesController::class, 'getvideos'])->name('video.display');
        //====================================Programmes Route===================================
        Route::controller(App\Http\Controllers\ProgrameController::class)->middleware('auth')->group(function(){
            Route::get('programmes', 'index')->name('programe.index');
            Route::post('programmes/store', 'store')->name('programe.store');
            Route::put('programmes/{uuid}/update', 'update')->name('programe.update');
            Route::get('programmes/fetch', 'create')->name('programe.fetch');
            Route::get('/programes/{programe}/delete', 'destroy')->name('programe.delete');
        });

        //====================================End Programmes Route===================================
        //====================================Schollars Route========================================
        Route::controller(App\Http\Controllers\SchollarController::class)->middleware('auth')->group(function(){
            Route::get('schollars', 'index')->name('schollar.index');
            Route::post('schollars/store', 'store')->name('schollar.store');
            Route::put('schollars/{uuid}/update', 'update')->name('schollar.update');
            Route::get('/schollars/{schollar}/delete', 'destroy')->name('schollar.delete');
        });
        //====================================End Schollars Route===================================

        //=====================================Start Audios Route====================================
        Route::controller(App\Http\Controllers\AudioController::class)->middleware('auth')->group( function(){
            Route::get('audios', 'index')->name('audios.index');
            Route::get('audios/create', 'create')->name('audios.create');
            Route::post('audios/store', 'store')->name('audios.store');
            // Route::get('audio/{filename}', 'getAudios')->name('audio.display');
        });
        //=====================================End Audios Route======================================

        Route::post('/download/{lecture}', [FrontController::class, 'download'])->name('download');

        // ======================================= Search Controller ==================================
        Route::post('/search', [LecturesController::class, 'search'])->name('getSearch');
