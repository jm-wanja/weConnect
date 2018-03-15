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

Route::post('business', 'BusinessController@createBusiness');

Route::get('business', 'BusinessController@getAllBusinesses');

Route::get('business/{id}', 'BusinessController@getBusinessById');

Route::put('business/{id}', 'BusinessController@updateBusinessById');

Route::delete('business/{id}', 'BusinessController@deleteBusiness');
