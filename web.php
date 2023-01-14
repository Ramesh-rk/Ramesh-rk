<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\StudentLoginController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('dashboard',function (){
    return view('dashboard');
});


Route::get('login',[StudentLoginController::class,'showLoginForm'])->name('login');
Route::post('login',[StudentLoginController::class,'login']);


Route::get('logout',[StudentLoginController::class,'logout'])->name('logout');
Route::post('logout',[StudentLoginController::class,'logout']);


Route::prefix('admin')->middleware('auth:admin')->group(function(){
    Route::any('admin1',[HomeController::class,'admin1'])->name('admin1');
    Route::any('admin2',[HomeController::class,'admin2'])->name('admin2');
    Route::any('admin3',[HomeController::class,'admin3'])->name('admin3');

});

Route::any('/student1',[StudentLoginController::class,'showLoginForm'])->name('student1');
Route::any('/student2',[StudentLoginController::class,'showLoginForm'])->name('student2');
Route::any('/student3',[StudentLoginController::class,'showLoginForm'])->name('student3');
Route::any('/student4',[StudentLoginController::class,'showLoginForm'])->name('student4');
