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

Use App\TodoItem;

// this was already here - probably will be deleted in near future
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
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

// CRUD API

Route::get('todoitems', 'TodoItemController@index');
Route::get('todoitems/{todoItem}', 'TodoItemController@show');
Route::post('todoitems', 'TodoItemController@store');
Route::put('todoitems/{todoItem}', 'TodoItemController@update');
Route::delete('todoitems/{todoItem}', 'TodoItemController@delete');

// Route::group(['middleware' => 'jwt.auth'], function()   {
//     Route::resource('todoitems', 'TodoItemController@index');
// });