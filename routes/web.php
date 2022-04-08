<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
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

Route::get('/master', function () {
    return view('admin.layouts.Master');
});


Route::get('/dashboard', function () {
    return view('admin.dashboard.dashboard');
});


Route::prefix("category")->group(function(){
    Route::get("add",[CategoryController::class,"create"])->name("category.add");
});

// session/cookies check automatically . its use for authenticating user during login/logout
Auth::routes(); 

//after authentication it will redirect to required page. example. home/ index page

Route::middleware("auth")->group(function(){
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/home1', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/home2', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/home3', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/home4', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

});
