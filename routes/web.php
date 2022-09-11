<?php

use App\Models\Catagory;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\CatagoryController;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/catagory/index',[CatagoryController::class, 'index'])->name('catagory.index');
Route::get('/catagory/create',[CatagoryController::class, 'create'])->name('catagory.create');
Route::post('/catagory/store',[CatagoryController::class, 'store'])->name('catagory.store');
Route::get('/catagory/edit/{id}',[CatagoryController::class, 'edit'])->name('catagory.edit');
Route::post('/catagory/update/{id}',[CatagoryController::class, 'update'])->name('catagory.update');


