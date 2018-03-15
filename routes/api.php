<?php

use Illuminate\Http\Request;
use App\Business;

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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::post('business', function (Request $request) {
    $resp = Business::create($request->all());
    return $resp;
});

Route::get('business', function () {
    return response(Business::all(), 200);
});

Route::get('business/{id}', function ($businessId) {
    return response()->json(Business::find($businessId), 200);
});

Route::put('business/{id}', function (Request $request, $businessId) {
    $business = Business::findOrFail($businessId);
    $business->update($request->all());
    return $business;
});

Route::delete('business/{id}', function (Request $request, $businessId) {
    Business::find($businessId)->delete();
    return 204;
});
