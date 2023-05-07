<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\ReviewCintroller;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\AboutMyController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ServiesController;
use App\Http\Controllers\SettingCintroller;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

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
Route::group(['prefix' => LaravelLocalization::setLocale()], function()
{
    Route::get('/',function(){
    return 'how are you sir';
    });
    Route::name('admin.')->prefix('/admin')->group(function(){

        Route::get('/',[HomeController::class,'index'])->name('index');
        Route::resource('/setting',SettingCintroller::class);
        Route::resource('/review',ReviewController::class);
        Route::resource('/skill',SkillController::class);
        Route::resource('/servies',ServiceController::class);
        Route::resource('/about',AboutMyController::class);


});



});
