<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ArtistViewController;


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
Route::get('/', [IndexController::class, 'index']);
Route::get('/artist-view',[ArtistViewController::class, 'artists']);
Route::get('/album-view',[ArtistViewController::class, 'albums']);
Route::get('/genres-view',[ArtistViewController::class, 'genres']);
