<?php

	use App\Http\Controllers\Auth\LoginController;
	use App\Http\Controllers\Auth\RegisterController;
	use App\Http\Controllers\TodoListController;
use Illuminate\Support\Facades\Route;

//Resource Route
//Route::resource('todo-list',TodoListController::class);

//Resource route with custom name
//Route::resource('todo-list', TodoListController::class)->names([
//    'index' => 'todo-lists',
//    'store' => 'todo-store'
//]);
Route::apiResource('todo-list', TodoListController::class)->names([
																	  'index' => 'todo-lists',
																	  'store' => 'todo-store'
																  ]);

Route::post('/register',RegisterController::class)->name('user.register');

Route::post('/login',LoginController::class)->name('user.login');