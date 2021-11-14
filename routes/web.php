<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PizzaController;


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/pizza', [PizzaController::class, 'index'])->name('pizza.index');
