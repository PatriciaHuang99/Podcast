<?php

use App\Http\Controllers\ListController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PodcastController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\RegisteredUserController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\TagController;

Route::get('/', [PodcastController::class, 'index']);

Route::get('/podcasts/create', [PodcastController::class, 'create'])->middleware('auth');
Route::post('/podcasts', [PodcastController::class, 'store'])->middleware('auth');

Route::get('/podcasts/{id}/edit', [PodcastController::class, 'edit'])->middleware('auth');
Route::put('/podcasts/{id}/update', [PodcastController::class, 'update'])->middleware('auth');

Route::get('/mylist', ListController::class)->middleware('auth');
Route::get('/search', SearchController::class);
Route::get('/tags/{tag:name}', TagController::class);

Route::middleware('guest')->group(function () {
    Route::get('/register', [RegisteredUserController::class, 'create']);
    Route::post('/register', [RegisteredUserController::class, 'store']);
    Route::get('/login', [SessionController::class, 'create']);
    Route::post('/login', [SessionController::class, 'store']);
});


Route::delete('/logout', [SessionController::class, 'destroy'])->middleware('auth');

