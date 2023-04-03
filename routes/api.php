<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });


Route::post('test','ApiController@test')->name('Api.test');


Route::get('createToken','ApiController@createToken')->name('Api.createToken');
Route::post('generateToken','ApiController@generateToken')->name('Api.generateToken');


Route::middleware('auth:sanctum')->group(function(){
    Route::post('MovieDetials','ApiController@MovieDetials')->name('Api.MovieDetials');
    Route::post('deleteToken','ApiController@deleteToken')->name('Api.deleteToken');
});
