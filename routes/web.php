<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Usercontroller;


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

Route::get('/login', function () {
    return view('login');
});



Route::post('/login',[Usercontroller::class,'login']);
Route::get('/',[ProductController::class,'index']);
Route::get("detail/{id}",[ProductController::class, 'detail']);
Route::get("search/{id}",[ProductController::class,'search']);
