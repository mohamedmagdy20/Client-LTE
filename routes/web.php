<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RequestController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\MangeRequestController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;

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

Route::get('/', [RequestController::class,'index'])->name('index');
Route::post('user/register',[RegisterController::class,'RegisterAdmin'])->name('admin.register');
Route::post('user/login',[LoginController::class,'authenticate'])->name('admin.login');
Route::post('request/store',[RequestController::class,'store'])->name('request.store');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('request/search/',[RequestController::class,'searchReport'])->name('request.search');
Route::middleware(['auth'])->prefix('dashboard')->group(function(){
    Route::get('admin',[AdminController::class,'index'])->name('admin.index');
    Route::get('approve/{id}',[AdminController::class,'Approve'])->name('admin.approve');
    Route::get('block/{id}',[AdminController::class,'Block'])->name('admin.block');
    Route::get('profile',[AdminController::class,'show'])->name('admin.show');
    Route::get('profile/edit/{id}',[AdminController::class,'edit'])->name('admin.edit');
    Route::post('profile/update/{id}',[AdminController::class,'update'])->name('admin.update');

    Route::get('request',[MangeRequestController::class,'index'])->name('manage.request.index');
    Route::get('request/show/{id}',[MangeRequestController::class,'show'])->name('manage.request.show');
    Route::get('responce/create/{id}',[MangeRequestController::class,'createRepsonce'])->name('responce.create');
    Route::post('reponce/add/{id}',[MangeRequestController::class,'makeResponce'])->name('responce.add');
    Route::get('request/open/{id}',[MangeRequestController::class,'open'])->name('request.open');
    Route::get('request/closed/{id}',[MangeRequestController::class,'close'])->name('request.close');


});
Auth::routes();
