<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ArtistViewController;
use App\Http\Controllers\AlbumViewController;
use App\Http\Controllers\GenreViewController;

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


Route::get('/artist_view',[ArtistViewController::class, 'artists']);
Route::get('/album_view',[AlbumViewController::class, 'albums']);
Route::get('/genres_view',[GenreViewController::class, 'genres']);
Route::get('/albums', [AlbumViewController::class,'searchh'])->name('albums.search');
