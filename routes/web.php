<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FileController;
use App\Http\Controllers\ShapeController;
use App\Http\Controllers\DemandeController;
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

Route::get('/redirects',[UserController::class,'user_index']);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');})->name('dashboard');

Route::get('about', function () {
    return view('about');})->name('about');

Route::get('/uploadpage',[FileController::class,'uploadpage']);
Route::post('/uploadfile',[FileController::class,'store']);
Route::get('/show',[FileController::class,'show']);
Route::get('/download/{file}',[FileController::class,'download']);
Route::get('/view/{id}',[FileController::class,'view']);
    

Route::get('/admin', function () {
    return view('admin');

})->name('admin');
Route::get('home', [HomeController::class, 'index'])->name('home');

Route::get('shapepage', [ShapeController::class, 'shapepage']);
Route::post('selectshape',[ShapeController::class, 'selectshape']);
Route::get('/showshape',[ShapeController::class,'showshape']);

Route::get('/demandepage',[DemandeController::class,'demandepage']);
Route::post('/demande',[DemandeController::class,'demande']);
