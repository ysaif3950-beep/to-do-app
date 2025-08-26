<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
Route::get('posts',[PostController::class,'index']);
Route::get('posts/create',[PostController::class,'create']);
Route::get('posts/{id}/edit',[PostController::class,'edit']);
Route::post('posts',[PostController::class,'store']);
Route::delete('posts/{id}',[PostController::class,'destroy']);


