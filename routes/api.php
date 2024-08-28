<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\PostApiController;

Route::get('/posts', [PostApiController::class, 'index']);
Route::get('/posts/{id}', [PostApiController::class, 'show']);
