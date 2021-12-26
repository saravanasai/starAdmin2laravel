<?php

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\Dashboard\AdminDashBoardControlller;
use App\Http\Controllers\Admin\User\AdminUserController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\User\AuthController as UserAuthController;
use App\Http\Controllers\Frontend\User\PagesController;
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
    Route::resource('users',AdminUserController::class);
    Route::post('logout',[AuthController::class,'logout'])->name('logout');
});



 //FrontEnd Routes

 Route::get('/',HomeController::class)->name('home');
 Route::get('signup',[UserAuthController::class,'signup'])->name('signup');
 Route::post('signup',[UserAuthController::class,'register']);
 Route::get('login',[UserAuthController::class,'login'])->name('login');
 Route::post('login',[UserAuthController::class,'userlogin']);


 //protected routes for User Frontend
 Route::group(['middleware'=>'authUser',"prefix"=>"user","as"=>"user"],function(){
    Route::get('contactus',[PagesController::class,'contact'])->name('.contact');
    Route::post('logout',[UserAuthController::class,'logout'])->name('.logout');
 });
