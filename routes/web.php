<?php

use App\Http\Controllers\Todo\TodoController;
use App\Http\Controllers\Hallo\HalloController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/halo',function(){
//     return view('coba.halo');
// });

Route::get('/hallo', [HalloController::class, 'index']);

Route::get('/todo', [TodoController::class, 'index'])->name('todo');
Route::post('/todo', [TodoController::class, 'store'])->name('todo.post');
Route::put('/todo/{id}', [TodoController::class, 'update'])->name('todo.update');
Route::delete('/todo/{id}', [TodoController::class, 'destroy'])->name('todo.delete');
