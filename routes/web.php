<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

// Route::get('/',[PageController::class,'index']);
// Route::get('/product/create',[PageController::class,'create']);
// Route::post('/product/create',[PageController::class,'store']);
// Route::get('/product/edit/{id}',[PageController::class,'edit']);
// Route::post('/product/edit/{id}',[PageController::class,'update']);
// Route::get('/product/delete/{id}',[PageController::class,'destroy']);

Route::get('/',[PageController::class,'index']);

Route::resource('product', PageController::class);




 