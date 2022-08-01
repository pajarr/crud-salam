<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TitleController;
use App\Http\Controllers\DescController;
use App\Http\Controllers\ImagesController;
use App\Http\Controllers\SubtitleController;


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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/title', function () {
    return view('title');
});

Route::resource('title', TitleController::class);
Route::resource('subtitle', SubtitleController::class);
Route::put('/titlee', [TitleController::class, 'update']);
Route::resource('images', ImagesController::class);
Route::resource('desc', DescController::class);
