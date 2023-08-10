<?php

use App\Http\Controllers\LeadController;
use GuzzleHttp\Client;
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

Route::middleware('auth:sanctum')->post('/lead/store', [LeadController::class, 'store']);
Route::middleware('auth:sanctum')->post('/lead/update/{id}', [LeadController::class, 'update']);
Route::middleware('auth:sanctum')->get('/lead/find/{id}', [LeadController::class, 'find']);

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

Route::post('/ip/location', function (Request $request) {
    $ip = $request->ip;

    $client = new Client([
        // Base URI is used with relative requests
        'base_uri' => "https://api.findip.net/$ip/?token=a4b542192dd34a8682ec1c71f942b01a",
    ]);

    return $client->request('GET', '', [])->getBody();
});
