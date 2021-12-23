<?php

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\Dashboard\AdminDashBoardControlller;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Admin Authetication Routes
Route::group(["prefix"=>"admin","as"=>"admin"],function(){
    Route::get('login',[AuthController::class,'login'])->name('login');
    Route::post('login',[AuthController::class,'Authenticate']);
});

//Admin  Routes  protected by middleware
Route::group(["middleware"=>"auth","prefix"=>"admin","as"=>"admin"],function(){
    Route::get('home',AdminDashBoardControlller::class)->name('home');
    Route::post('logout',[AuthController::class,'logout'])->name('logout');
});
