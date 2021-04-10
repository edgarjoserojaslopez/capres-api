<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HelloController;
use App\Http\Controllers\AuthController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/hello', [HelloController::class, 'hello']);
Route::post('/login', [AuthController::class, 'login']);
Route::post('register','App\Http\Controllers\AuthController@register');
/* Route::get('/user', 'AuthController@user')->middleware('auth:api'); */
Route::get('user','App\Http\Controllers\AuthController@user')->middleware('auth:api');
