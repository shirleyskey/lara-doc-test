<?php

use App\Bookable;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::get('booklist', 'Api\BookController@index');

// Route::get('booklist/{id}', 'Api\BookController@show' );

Route::apiResource('booklist', 'Api\BookController')->only([
    'index', 
    'show'
]);

Route::get('booklist/{id}/availibility', 'Api\BookableAvailabilityController')
    ->name('book.availbility.show');
Route::get('booklist/{id}/reviews', 'Api\BookableReviewController')
    ->name('book.review.index');