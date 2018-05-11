<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// use App\Constants\Priority as Priority;

include(app_path() . '/constants.php');

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test-axios', function () {
    echo 'works!';
});