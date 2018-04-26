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

// this was already here - probably will be deleted in near future
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// one to many obtain test
// https://laravel.com/docs/5.6/eloquent-relationships#one-to-many
Route::get('/users/1/todoitems', function() {
    echo App\User::find(1)->todoItems;
});

Route::group([

    'middleware' => 'api',
    'prefix' => 'auth'

], function ($router) {

    Route::post('login', 'AuthController@login');
    Route::post('logout', 'AuthController@logout');
    Route::post('refresh', 'AuthController@refresh');
    Route::post('me', 'AuthController@me');

});