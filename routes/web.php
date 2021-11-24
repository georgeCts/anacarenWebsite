<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\PanelController;
use App\Http\Controllers\Admin\PostsController;

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

Route::get('/', [HomeController::class, 'index']);

Route::get('/blog', [BlogController::class, 'index']);
Route::get('/blog/{slug}', [BlogController::class, 'viewPost']);

Route::get('/login-panel', [LoginController::class, 'index']);
Route::post('/login-panel', [LoginController::class, 'access']);
Route::get('/logout-panel', [LoginController::class, 'logout']);

Route::group([  'prefix'    => 'panel',
                'middleware'=> 'panel.auth'], function() {
    
    //DASHBOARD
    Route::get('/', [PanelController::class, 'index']);

    Route::get('publicaciones', [PostsController::class, 'index']);
    Route::get('publicaciones/crear', [PostsController::class, 'create']);
    Route::post('publicaciones/crear', [PostsController::class, 'store']);

    Route::get('publicaciones/editar/{id}', [PostsController::class, 'edit']);
    Route::put('publicaciones/editar', [PostsController::class, 'update']);

    Route::get('publicaciones/eliminar/{id}', [PostsController::class, 'delete']);

    //SLIDERS
    Route::get('sliders', 'Admin\SlidersController@index');
    Route::get('sliders/slider-crear', 'Admin\SlidersController@create');
    Route::post('sliders/slider-crear', ['as' => 'new-slider', 'uses' => 'Admin\SlidersController@store']);

    Route::get('sliders/slider-editar/{pkSlider}', 'Admin\SlidersController@edit');
    Route::post('sliders/slider-editar', ['as' => 'update-slider', 'uses' => 'Admin\SlidersController@update']);

    //VIDEOS
    Route::get('videos', 'Admin\VideosController@index');
    Route::get('videos/video-crear', 'Admin\VideosController@create');
    Route::post('videos/video-crear', ['as' => 'new-video', 'uses' => 'Admin\VideosController@store']);

    Route::get('videos/video-editar/{pkVideo}', 'Admin\VideosController@edit');
    Route::put('videos/video-editar', ['as' => 'update-video', 'uses' => 'Admin\VideosController@update']);
});
