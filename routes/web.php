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

Route::get('/', function () {
    return view('welcome');
});
/**-------------------------------Routes Structures------------------------------ */
Route::get('/structure',[
    'as' => 'indexStructure',
    'uses' => 'StructureController@index'
]);
Route::post('/addStructure',[
    'as' => 'createStructure',
    'uses' => 'StructureController@createStructure'
]);
Route::get('/list',[
    'as' => 'showStructure',
    'uses' => 'StructureController@showStructure'
]);
/**----------------------------Fin Routes Structures----------------------------- */
/**-------------------------------Routes Agences--------------------------------- */
Route::get('/agence',[
    'as' => 'agence',
    'uses' => 'AgenceController@index'
]);
Route::get('/compte',[
    'as' => 'compte',
    'uses' => 'AgenceController@compteur'
]);
Route::post('/addAgence',[
    'as' => 'createAgence',
    'uses' => 'AgenceController@createAgence'
]);
/**----------------------------Fin Routes Agences-------------------------------- */
/**-------------------------------Routes Reservations---------------------------- */
Route::get('/reservation',[
    'as' => 'index',
    'uses' => 'ReservationController@index'
]);
Route::post('/create',[
    'as' => 'createReservation',
    'uses' => 'ReservationController@createReservation'
]);
Route::get('/list',[
    'as' => 'showReservation',
    'uses' => 'ReservationController@showReservation'
]);
/**----------------------------Fin Routes Reservations--------------------------- */
/**-------------------------------Routes Agents---------------------------------- */
Route::get('/agent',[
    'as' => 'agent',
    'uses' => 'AgentController@index'
]);
Route::post('/addAgent',[
    'as' => 'createAgent',
    'uses' => 'AgentController@createAgent'
]);
/**----------------------------Fin Routes Agents--------------------------------- */
/**-------------------------------Routes Guichets-------------------------------- */
Route::get('/guichet',[
    'as' => 'guichet',
    'uses' => 'GuichetController@index'
]);
Route::post('/addGuichet',[
    'as' => 'createGuichet',
    'uses' => 'GuichetController@createGuichet'
]);
/**----------------------------Fin Routes Guichets-------------------------------- */