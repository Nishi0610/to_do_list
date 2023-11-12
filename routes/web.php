<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoListController;
use App\Http\Controllers\TaskController;

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


//Route::get('/', [TodolistController::class, 'index']); 
Route::get('/', [TaskController::class,'index']); 
Route::post('/create', [TaskController::class,'create']); 
Route::get('/tasks/{id}/edit', [TaskController::class,'edit']);
Route::delete('/delete/{id}', [TaskController::class,'delete']); //$id=>
route::get('/tasks', [TaskController::class,'store']);
route::post('/tasks', [TaskController::class,'store']);
route::put('/tasks/{id}', [TaskController::class,'update']);