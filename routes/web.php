<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FromController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/index',[FromController::class,'index']);
Route::post('/indexpost',[FromController::class,'post']);

Route::get('/indexone',[FromController::class,'indexone']);
Route::post('/indexonepost',[FromController::class,'postone']);


Route::get('/payment',[FromController::class,'view']);
Route::post('/payment',[FromController::class,'pay']);