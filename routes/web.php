<?php

use App\Http\Controllers\CastController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\MoviesController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return redirect('/movies');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('movies', MoviesController::class);
Route::resource('casts', CastController::class);
Route::resource('movies.comments', CommentController::class)->shallow();

Route::post('/movies/{movie:id}/cast_store', [MoviesController::class, 'movie_cast_store'])->name('movie_cast_store');
Route::delete('/movies/{movie:id}/casts/{cast:id}', [MoviesController::class, 'movie_cast_destroy'])->name('movie_cast_destroy');