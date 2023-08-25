<?php

use App\Http\Controllers\FeedReaderController;
use App\Http\Controllers\IpLocationController;
use App\Http\Controllers\LeadController;
use App\Http\Controllers\ProxyController;
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

Route::post('/token/generate', function (Request $request) {
    try {
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            $user = Auth::user();
            $success['token'] = $user->createToken($request->token_name)->plainTextToken;
            $success['name'] = $user->name;

            return $success;
        } else {
            return ['error' => "Unauthorized"];
        }

    } catch (Throwable $e) {
        return ['error' => $e->getmessage()];
    }
});

Route::middleware('auth:sanctum')->get('/token/test', function (Request $request) {
    return $request->user();
});

Route::middleware('auth:sanctum')->post('/lead/store', [LeadController::class, 'store']);
Route::middleware('auth:sanctum')->post('/lead/update/{id}', [LeadController::class, 'update']);
Route::middleware('auth:sanctum')->get('/lead/find/{id}', [LeadController::class, 'find']);

Route::post('/ip/location', [IpLocationController::class, 'location']);
Route::get('/feed/hackernoon', [FeedReaderController::class, 'hackernoon']);
Route::post('/feed/by-domain', [FeedReaderController::class, 'byDomain']);
Route::get('/proxy/zenquote/today', [ProxyController::class, 'getZenQuoteToday']);
Route::get('/proxy/zenquote/random', [ProxyController::class, 'getZenQuoteRandom']);
