<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HomeController::class,  'home']);
Route::get('/profil', [HomeController::class,'profil']);
Route::get('/staff', [HomeController::class,'staff']);
Route::get('/strukturLembaga', [HomeController::class,'strukturLembaga']);
Route::get('/dkv', [HomeController::class,'dkv']);
Route::get('/akl', [HomeController::class,'akl']);
Route::get('/tkr', [HomeController::class,'tkr']);
Route::get('/tsm', [HomeController::class,'tsm']);
Route::get('/elin', [HomeController::class,'elin']);
Route::get('/facility', [HomeController::class,'facility']);
Route::get('/extracurricular', [HomeController::class,'extracurricular']);
Route::get('/bkk', [HomeController::class,'bkk']);
Route::get('/news', [HomeController::class,'news']);
Route::get('/contact', [HomeController::class,'contact']);