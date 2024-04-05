<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminAuthController;


Route::get('login',[AdminAuthController::class,'login_form'])->name('login.form');
Route::post('login',[AdminAuthController::class,'login_functionality'])->name('login.functionality');
Route::group(['middleware'=>'admin'],function(){
    Route::get('logout',[AdminAuthController::class,'logout'])->name('admin.logout');
    Route::get('dashboard',[AdminAuthController::class,'dashboard'])->name('dashboard');
});
