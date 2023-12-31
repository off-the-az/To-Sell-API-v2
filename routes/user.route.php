<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\UsersController;

Route::get('/users/get/all', [UsersController::class, 'getAll']);
Route::get('/users/get/byId/{id}', [UsersController::class, 'getById']);
Route::get('/users/get/byToken/{token}', [UsersController::class, 'getByToken']);
Route::put('/users/update', [UsersController::class, 'update']);
Route::delete('/users/delete', [UsersController::class, 'delete']);
