<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\SearchController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

Route::get('/login',[PageController::class,'login']);
Route::get('/about',[PageController::class,'about']);
Route::get('/search/',[SearchController::class,'search']);

//Route::get('/search/', [SearchController::class,'search'])->name('search');

Route::get('/',[StudentController::class,'index']);
Route::get('/edit/{id}',[StudentController::class,'edit']);
Route::get('/show/{id}',[StudentController::class,'show']);
Route::get('/create',[StudentController::class,'create']);
Route::post('/store',[StudentController::class,'store']);
Route::post('/update/{id}',[StudentController::class,'update']);
Route::get('/delete/{id}',[StudentController::class,'delete']);
