<?php

use Illuminate\Http\Request;
use App\Event;

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
//Route::group(['middleware' => 'auth:api'], function() {

    Route::get('events', 'EventController@index');
    Route::get('events/{event}', 'EventController@show');
    Route::post('events', 'EventController@store');
    Route::put('events/{event}', 'EventController@update');
    Route::delete('events/{event}', 'EventController@delete');
    Route::get('organizers', 'EventController@oindex');
//});

Route::post('register', 'Auth\RegisterController@register');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout');

Route::middleware('auth:api')
    ->get('/user', function (Request $request) {
        return $request->user();
    });