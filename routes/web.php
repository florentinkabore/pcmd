<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FileController;
use App\Http\Controllers\ShapeController;
use App\Http\Controllers\DemandController;
use App\Http\Controllers\showdemandController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ServiceController;

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
    return view('home');
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
    

Route::get('admin', function () {
    return view('adminLayout.admin');

})->name('admin');
Route::get('home', [HomeController::class, 'index'])->name('home');

//shape
Route::get('shapepage', [ShapeController::class, 'shapepage']);
Route::post('selectshape',[ShapeController::class, 'selectshape']);
Route::get('/showshape',[ShapeController::class,'showshape']);


//demand
Route::get('demandepage',[DemandController::class,'demandepage']);
Route::post('demande',[DemandController::class,'demande']);
Route::get('showdemand',[showdemandController::class,'index']);
Route::get('demandpage',function(){
    return view('clientLayout.demand');
});

Route::get('miseenforme',function(){
    return view('service.mise_en_forme');
});
Route::get('miseenforme_correction',function(){
    return view('service.correction_mise_en_forme');
});

Route::get('uploader_document',function(){
    return view('clientLayout.uploadpage');
});

Route::get('paiement',function(){
    return view('clientLayout.payment');
});

Route::get('telecharger_document',function(){
    return view('clientLayout.downloadpage');
});

Route::get('navbar2',function(){
    return view('navbar2');
});




        //payment
Route::get('stripe',[PaymentController::class,'stripe']);
Route::post('stripe',[PaymentController::class,'stripePost'])->name('stripe.post');

//service
Route::post('service',[ServiceController::class,'service'])->name('service');
