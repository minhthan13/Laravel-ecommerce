<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SanphamController;
use App\Http\Controllers\SearchController;
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

Route::get('/',[SanphamController::class,'home']);
Route::get('/product/{id}.html', [SanphamController::class, "product"]);
Route::post('/find-price', [SearchController::class, "search"]);
Route::post('product/find-price', [SearchController::class, "search"]);