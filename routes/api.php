<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/login', function (Request $request) {
    try {
        if(Auth::attempt(['email' => 'butler1970@gmail.com', 'password' => '1234'])){
            $user = Auth::user();
            $success['token'] =  $user->createToken('frontend')->plainTextToken;
            $success['name'] =  $user->name;

            return $success;
        }
        else{
            return ['error' => 'Unauthorized'];
        }

    } catch (Throwable $e) {
        return ['error' => $e->getmessage()];
    }
});

Route::get('/test', function (Request $request) {
    return ['result' => 'success'];
});
