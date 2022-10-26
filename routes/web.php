<?php

use App\Models\Catagory;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\CatagoryController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use App\Http\Controllers\Admin\subcatagoryController;
use App\Http\Controllers\Admin\postController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\userController;
use App\Http\Controllers\IconController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();
 
    return redirect('/home');
})->middleware(['auth', 'signed'])->name('verification.verify');

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/catagory/index',[CatagoryController::class, 'index'])->name('catagory.index');
Route::get('/catagory/create',[CatagoryController::class, 'create'])->name('catagory.create');
Route::post('/catagory/store',[CatagoryController::class, 'store'])->name('catagory.store');
Route::get('/catagory/edit/{id}',[CatagoryController::class, 'edit'])->name('catagory.edit');
Route::post('/catagory/update/{id}',[CatagoryController::class, 'update'])->name('catagory.update');
Route::get('/catagory/delete/{id}',[CatagoryController::class, 'distroy'])->name('catagory.delete');

//subcatagory croud
Route::get('/subcatagory/index',[subcatagoryController::class, 'index'])->name('subcatagory.index');
Route::get('/subcatagory/create',[subcatagoryController::class, 'create'])->name('subcatagory.create'); 
Route::post('/subcatagory/store',[subcatagoryController::class, 'store'])->name('subcatagory.store');
Route::get('/subcatagory/edit/{id}',[subcatagoryController::class, 'edit'])->name('subcatagory.edit');
Route::post('/subcatagory/update/{id}',[subcatagoryController::class, 'update'])->name('subcatagory.update');
Route::get('/subcatagory/delete/{id}',[subcatagoryController::class, 'distroy'])->name('subcatagory.delete');

//post croud
Route::get('/post/create',[postController::class, 'create'])->name('post.create');
Route::post('/post/store',[postController::class, 'store'])->name('post.store');
//user croud
Route::get('/user/details',[userController::class, 'userindex'])->name('user.index');

Route::post('/addicon',[IconController::class, 'add']);

