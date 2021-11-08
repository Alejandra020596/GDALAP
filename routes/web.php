<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;

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
    return view('home/login');
});

Route::get('login', function()
{
    return view('home.login');
});

Route::prefix('Acceso')->group(function () {
    Route::post('/Acceso', ['as' => 'acceso', 'uses' => 'App\Http\Controllers\LoginController@acceso']);

});

// Route::group(['middleware' => 'auth'], function () {
    Route::prefix('customers')->group(function () {
        Route::get('/customers', ['as' => 'customers', 'uses' => 'App\Http\Controllers\CustomersController@index']);
        Route::post('/store', ['as' => 'customers.store', 'uses' => 'App\Http\Controllers\CustomersController@store']);
    });
    Route::prefix('communes')->group(function () {
        Route::get('/communes', ['as' => 'communes', 'uses' => 'App\Http\Controllers\CommunesController@index']);
        Route::post('/store', ['as' => 'communes.store', 'uses' => 'App\Http\Controllers\CommunesController@store']);
    });
    Route::prefix('regions')->group(function () {
        Route::get('/regions', ['as' => 'regions', 'uses' => 'App\Http\Controllers\RegionsController@index']);
        Route::post('/store', ['as' => 'regions.store', 'uses' => 'App\Http\Controllers\RegionsController@store']);
        Route::delete('/destroy/{id_reg}', ['as' => 'regions.destroy', 'uses' => 'App\Http\Controllers\RegionsController@destroy']);
    });
// });
