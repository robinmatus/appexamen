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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/resoluciones',
[
'uses'=>'ResolucionController@index',
'as'=>'resoluciones.index'
]
);

Route::get('/detalles',
[
'uses'=>'ResolucionController@getDetalles',
'as'=>'resoluciones.detalles'
]
);

Route::post('/detalle/{id}', 'ResolucionController@show');

Route::post('/cambiar/{id}', 'ResolucionController@update');
