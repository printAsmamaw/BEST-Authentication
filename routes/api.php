<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\usercontoller;


use App\Http\Controllers\AuthController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
//1 first register and create the token for that email and password
Route::post('/register', [usercontoller::class, 'register']);

//3 third
Route::middleware('auth:sanctum')->group(function () {
    Route::resource('books', BookController::class);
});

//2  second

//Inorder to see the all books,delete books,update bookes,by id first
//create the token by sanctum add on the postamn that means on browser for that
// email and password
//token is create by sanctum at the time of login so first the user
//must be login, at that time the token is create and send to the browser
//the user don`t see the bookes before add to the postman or in browser
Route::post('/token', [AuthController::class, 'login']);