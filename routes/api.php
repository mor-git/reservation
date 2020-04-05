<?php

use Illuminate\Http\Request;
use App\Cors;

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
/**----------------------------Api Mobile Route Structure-------------------- */
Route::get('/apiStructure',[
    'as' => 'apiStructure',
    'uses' => 'ApiStructureController@index',
    'middleware' => 'cors'
]);
/**----------------------------Api Mobile Route Agence-------------------- */
Route::get('/apiAgence/{id}',[
    'as' => 'apiAgence',
    'uses' => 'ApiAgenceController@showAgence', 
    'middleware' => 'cors'
]);
/**----------------------------Api Mobile Route Région-------------------- */
Route::get('/apiRegion',[
    'as' => 'apiRegion',
    'uses' => 'ApiRegionController@showRegions', 
    'middleware' => 'cors'
]);
/**----------------------------Api Mobile Route Ville-------------------- */
Route::get('/apiVille/{id}',[
    'as' => 'apiVille',
    'uses' => 'ApiVilleController@showVilles', 
    'middleware' => 'cors'
]);