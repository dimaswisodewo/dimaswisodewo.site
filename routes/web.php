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

Route::get('/works', 'WorksController@index')->name('works');

Route::get('/about', 'AboutController@index')->name('about');
    
Route::prefix('detail/')->group(function() {
    Route::get('/math-app', 'DetailController@mathApp')->name('math-app');
    Route::get('/quiz-space-vr', 'DetailController@quizSpaceVr')->name('quiz-space-vr');
    Route::get('/game-lost-in-space', 'DetailController@gameLostInSpace')->name('game-lost-in-space');
    Route::get('/geonaturalresource-app', 'DetailController@geoNaturalResourceApp')->name('geonaturalresource-app');
    Route::get('/ecoeduapp', 'DetailController@ecoeduapp')->name('ecoeduapp');
    Route::get('/shoot-the-virus', 'DetailController@shootTheVirus')->name('shoot-the-virus');
    Route::get('/ar-multi-target', 'DetailController@arMultiTarget')->name('ar-multi-target');
    Route::get('/ar-extended-tracking', 'DetailController@arExtendedTracking')->name('ar-extended-tracking');
    Route::get('/game-delivery-man', 'DetailController@gameDeliveryMan')->name('game-delivery-man');
    Route::get('/game-tetris', 'DetailController@gameTetris')->name('game-tetris');
    Route::get('/game-ball-drive', 'DetailController@gameBallDrive')->name('game-ball-drive');
    Route::get('/click-game', 'DetailController@clickGame')->name('click-game');
});

Route::prefix('admin/')
    ->namespace('admin')
    ->middleware(['auth', 'admin'])
    ->group(function(){
        Route::get('/', 'DashboardController@index')->name('dashboard');
    });

Auth::routes();
Auth::routes(['register' => false]);
