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
});
Route::get('/see',function(){
    return view('park');
});
Route::get('/todo',[App\Http\Controllers\TodController::class,'index']);
Route::get('/create-todo',[App\Http\Controllers\TodController::class,'create']);
Route::post('/store-todo',[App\Http\Controllers\TodController::class,'store']);
Route::get('/todo/{id}',[App\Http\Controllers\TodController::class,'show']);
Route::get('/todo/{id}/edit',[App\Http\Controllers\TodController::class,'edit']);
Route::post('/update-todo/{id}',[App\Http\Controllers\TodController::class,'update']);
Route::get('/todo/{id}/delete',[App\Http\Controllers\TodController::class,'destroy']);
