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

Route::middleware('auth:sanctum')->get('/token/test', function (Request $request) {
    return $request->user();
});

Route::post('/token/generate', function (Request $request) {
    try {
        if(Auth::attempt(['email' => $request->email, 'password' => $request->password])){
            $user = Auth::user();
            $success['token'] =  $user->createToken($request->token_name)->plainTextToken;
            $success['name'] =  $user->name;

            return $success;
        }
        else{
            return ['error' => "Unauthorized"];
        }

    } catch (Throwable $e) {
        return ['error' => $e->getmessage()];
    }
});
