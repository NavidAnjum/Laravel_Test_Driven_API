<?php

use App\Http\Controllers\TodoListController;
use Illuminate\Support\Facades\Route;

//Resource Route
//Route::resource('todo-list',TodoListController::class);

//Resource route with custom name
Route::resource('todo-list', TodoListController::class)->names([
    'index' => 'todo-lists',
    'store' => 'todo-store'
]);