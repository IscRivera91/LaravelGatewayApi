<?php

use App\Http\Controllers\AuthorController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;

Route::group(['prefix'=>'books'], function () {

    Route::get('/',[BookController::class,'index']);
    Route::post('/',[BookController::class,'store']);
    Route::get('/{book}',[BookController::class,'show']);
    Route::put('/{book}',[BookController::class,'update']);
    Route::patch('/{book}',[BookController::class,'update']);
    Route::delete('/{book}',[BookController::class,'destroy']);

});

Route::group(['prefix'=>'authors'], function () {

    Route::get('/',[AuthorController::class,'index']);
    Route::post('/',[AuthorController::class,'store']);
    Route::get('/{author}',[AuthorController::class,'show']);
    Route::put('/{author}',[AuthorController::class,'update']);
    Route::patch('/{author}',[AuthorController::class,'update']);
    Route::delete('/{author}',[AuthorController::class,'destroy']);

});