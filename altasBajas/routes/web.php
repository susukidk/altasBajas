<?php

use App\Http\Controllers\Registros;
use Illuminate\Support\Facades\Route;

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
Route::get('/',[Registros::class,'index']);
Route::get('/create',[Registros::class,'create']);
Route::post('/store',[Registros::class, 'store']);  