<?php

use App\Http\Controllers\AuthTokenController;
use App\Http\Controllers\MinioUploadController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('login', [AuthTokenController::class, 'login']);
Route::post('register', [AuthTokenController::class, 'register']);

Route::middleware('auth:sanctum')->group(function () {
    Route::get('me', [AuthTokenController::class, 'me']);
    Route::post('logout', [AuthTokenController::class, 'logout']);
});

Route::post('objects', [MinioUploadController::class, 'uploadFile']);
Route::get('objects', [MinioUploadController::class, 'allFiles']);
Route::get('objects/{file_name}', [MinioUploadController::class, 'getObjectByName']);
