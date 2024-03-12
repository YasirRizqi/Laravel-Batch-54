<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
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

// Route::get('/home', function () {
//     return view('home');
// });

Route::get('/', [HomeController::class, 'index']);
Route::get('/home', [HomeController::class, 'index']);
Route::get('/form', [HomeController::class, 'form'])->name('form');
Route::post('welcome',[AuthController::class, 'welcome'])->name('welcome');
Route::get('table',function(){
    return view('table');
});
Route::get('data-table',function(){
    return view('data-table');
});

Route::resource('cast', CastController::class);