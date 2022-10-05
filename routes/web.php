<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/meals', [App\Http\Controllers\MealController::class, 'index'])->name('meals');
Route::get('/meals/create', [App\Http\Controllers\MealController::class, 'create'])->name('meals.create');
Route::post('/meals/store', [App\Http\Controllers\MealController::class, 'store'])->name('meals.store');
