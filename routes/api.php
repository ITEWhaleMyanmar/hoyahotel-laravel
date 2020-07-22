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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('special_offer','Api\SpecialOfferController@special_offer');
Route::get('room','Api\SpecialOfferController@room');
Route::get('special','Api\SpecialOfferController@special');
Route::get('facility','Api\SpecialOfferController@facility');
Route::get('dining','Api\SpecialOfferController@dining');
Route::get('contactus','Api\SpecialOfferController@contactus');
Route::get('thingstodo','Api\SpecialOfferController@thingstodo');