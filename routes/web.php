<?php

use Illuminate\Support\Facades\Route;

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

Auth::routes();

/*
|--------------------------------------------------------------------------
| 1) User 認証不要
|--------------------------------------------------------------------------
*/
Route::get('/', function () { return redirect('/home'); });

/*
|--------------------------------------------------------------------------
| 2) User ログイン後
|--------------------------------------------------------------------------
*/
Route::group(['middleware' => 'auth:user'], function() {
    Route::get('/home', 'App\Http\Controllers\HomeController@showDashboard')->name('home');
});

/*
|--------------------------------------------------------------------------
| 3) Admin 認証不要
|--------------------------------------------------------------------------
*/
Route::group(['prefix' => 'admin'], function() {
    Route::get('/',             function () { return redirect('/admin/home'); });
    Route::get('login',         'App\Http\Controllers\Admin\LoginController@showLoginForm')->name('admin.login');
    Route::post('login',        'App\Http\Controllers\Admin\LoginController@login');
});

/*
|--------------------------------------------------------------------------
| 4) Admin ログイン後
|--------------------------------------------------------------------------
*/
Route::group(['prefix' => 'admin', 'middleware' => 'auth:admin'], function() {
    Route::post('logout',       'App\Http\Controllers\Admin\LoginController@logout')->name('admin.logout');
    Route::get('home',          'App\Http\Controllers\Admin\HomeController@showOnlyInHouseUser')->name('admin.home');
    Route::post('home',        'App\Http\Controllers\Admin\HomeController@showOnlyInHouseUser');
    Route::post('del_user',        'App\Http\Controllers\Admin\HomeController@deleteTargetUser');
    Route::post('home/all_user',        'App\Http\Controllers\Admin\HomeController@showDashboard');
    Route::get('progress',     'App\Http\Controllers\Admin\ProgressController@getViewData');
    Route::post('progress_user',     'App\Http\Controllers\Admin\ProgressController@getViewUserData');
    Route::get('css',          'App\Http\Controllers\Admin\CSSController@getViewData');
    Route::get('js',           'App\Http\Controllers\Admin\JSController@getViewData');
    Route::get('jquery',       'App\Http\Controllers\Admin\jQueryController@getViewData');
    Route::get('php',          'App\Http\Controllers\Admin\PHPController@getViewData');
    Route::get('laravel',      'App\Http\Controllers\Admin\LaravelController@getViewData');
    Route::get('learning',      'App\Http\Controllers\Admin\LearningController@getViewData');
    Route::post('learning_user',      'App\Http\Controllers\Admin\LearningController@getViewUserData');
    Route::post('learning_all_user',      'App\Http\Controllers\Admin\LearningController@getViewAllUserData');
});


Route::get('/home', [App\Http\Controllers\HomeController::class, 'showDashboard'])->name('home');

// css
Route::get('/css_test',            'App\Http\Controllers\CSSController@getViewData');
Route::post('/css_test/{id}',      'App\Http\Controllers\CSSController@saveBtnStatus');

// JavaScript
Route::get('/js_test',            'App\Http\Controllers\JSController@getViewData');
Route::post('/js_test/{id}',      'App\Http\Controllers\JSController@saveBtnStatus');

// jQuery
Route::get('/jquery_test',            'App\Http\Controllers\jQueryController@getViewData');
Route::post('/jquery_test/{id}',      'App\Http\Controllers\jQueryController@saveBtnStatus');

// PHP
Route::get('/php_test',            'App\Http\Controllers\PHPController@getViewData');
Route::post('/php_test/{id}',      'App\Http\Controllers\PHPController@saveBtnStatus');

// Laravel
Route::get('/laravel_test',            'App\Http\Controllers\LaravelController@getViewData');
Route::post('/laravel_test/{id}',      'App\Http\Controllers\LaravelController@saveBtnStatus');

// ToDoリスト
Route::get('/todo_list',            'App\Http\Controllers\ToDoController@getViewData');
Route::post('/add_todo',            'App\Http\Controllers\ToDoController@addToDoList');
Route::post('/todo_del',            'App\Http\Controllers\ToDoController@delToDoList');
Route::post('/todo_edit',            'App\Http\Controllers\ToDoController@editToDoList');
Route::post('/todo_update',            'App\Http\Controllers\ToDoController@updateToDoList');

// 学び
Route::get('/learning',            'App\Http\Controllers\LearningController@getViewData');
Route::post('/add_learning',             'App\Http\Controllers\LearningController@addLearning');
Route::post('/learning_del',             'App\Http\Controllers\LearningController@delLearning');
Route::post('/learning_edit',            'App\Http\Controllers\LearningController@editLearning');
Route::post('/learning_update',          'App\Http\Controllers\LearningController@updateLearning');

