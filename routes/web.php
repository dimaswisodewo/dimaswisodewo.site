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

Route::get('/', 'HomeController@index')->name('/');

Route::get('/works-unity', 'WorksController@index')->name('works');
Route::get('/works-jupyter-notebook', 'WorksController@index_jupyter_notebook')->name('works_jupyter_notebook');
Route::get('/works-website', 'WorksController@index_website')->name('works_website');

Route::get('/about', 'AboutController@index')->name('about');
    
Route::get('detail/{slug}', 'DetailController@index')->name('detail');

Route::prefix('admin/')
    ->namespace('admin')
    ->middleware(['auth', 'admin'])
    ->group(function(){
        Route::get('/', 'DashboardController@index')->name('dashboard');

        Route::resource('work', 'WorkController');
        Route::resource('work-detail', 'WorkDetailController');
        Route::resource('platform', 'WorkPlatformController');
        Route::resource('technology', 'WorkTechnologyController');
        Route::resource('role', 'WorkRoleController');
        Route::resource('screenshot', 'ScreenshotController');
        Route::resource('video', 'VideoController');
    });

//Auth::routes();
Auth::routes(['register' => false]);
