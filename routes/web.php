<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
    // echo 'HELLO WORD';
});
Route::resource('/products', ProductController::class);
Route::get('/users',[\App\Http\Controllers\UserController::class,'index']);
Route::get('/usersm',[\App\Http\Controllers\UserController::class,'manytomany']);

Route::get('/posts',[\App\Http\Controllers\PostController::class,'index']);
