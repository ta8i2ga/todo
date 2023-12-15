<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\TodoController;
use App\Http\Controllers\CategoryController;

Route::get('/', [TodoController::class, 'index']);
Route::get('/todos/search', [TodoController::class, 'search']);
Route::post('/todos', [TodoController::class, 'store']);
Route::patch('/todos/{todo_id}', [TodoController::class, 'update']);
Route::delete('/todos/{todo_id}', [TodoController::class, 'destroy']);

Route::get('/categories', [CategoryController::class, 'index']);
Route::post('/categories', [CategoryController::class, 'store']);
Route::patch('/categories/{category_id}', [CategoryController::class, 'update']);
Route::delete('/categories/{category_id}', [CategoryController::class, 'destroy']);
