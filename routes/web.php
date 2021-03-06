<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::middleware('auth:api')->get('/app-home', function (Request $request) {
    return $request->user();
});

/*
|--------------------------------------------------------------------------
| API Routes Tasks
|--------------------------------------------------------------------------
*/

Route::post('register', 'API\RegisterController@register');

Route::middleware('auth:api')->group(function () {
    Route::resource('tasks', 'API\ProductController');
});
