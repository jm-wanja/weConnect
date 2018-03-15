<?php

use Illuminate\Http\Request;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('business', function () {
    return response(['business 1', 'business 2'], 200);
});

Route::get('business/{id}', function ($businessId) {
    return repsonse()->json(['businessId' => "{businessId}"], 200);
});

Route::post('business', function () {
    return response()->json(['message' => "Business created successfully!"], 201);
});

Route::put('business', function () {
    return response()->json(['message' => "Business details updated!"], 200);
});

Route::delete('business', function () {
    return response()->json(null, 204);
});
