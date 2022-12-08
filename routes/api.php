<?php

use App\Http\Controllers\Api\QuestionController;
use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\UserInfoController;
use App\Models\User;
use App\Models\UserInfo;
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


Route::apiResource('Question', QuestionController::class);

Route::apiResource('Category', CategoryController::class);
Route::apiResource('User', UserController::class);
Route::apiResource('UserInfor', UserInfoController::class);



