<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\CastController;

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

Route::get('/',[HomeController::class, 'Home']);
Route::post('/welcome',[RegisterController::class, 'welcome']);
Route::get('/register',[RegisterController::class, 'register']);


Route::get('/admin', function (){
    return view('template-file.home');  
});


Route::get('/tables', function (){
    return view('template-file.tables');  
});

Route::get('/data-tables', function (){
    return view('template-file.data-tables');  
});


//create data
Route::get('/cast/create', [CastController::class, 'create']); 
Route::post('/cast', [CastController::class, 'store']); 