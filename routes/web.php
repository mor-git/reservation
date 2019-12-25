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
    //return view('welcome');
    return view('index');
});
/**-------------------------------Routes Structures------------------------------ */
Route::get('/structure',[
    'as' => 'structure',
    'uses' => 'StructureController@index'
]);
Route::post('/addStructure',[
    'as' => 'createStructure',
    'uses' => 'StructureController@createStructure'
]);
Route::get('/showStructures',[
    'as' => 'showStructures',
    'uses' => 'StructureController@showStructure'
]);
/**----------------------------Fin Routes Structures----------------------------- */
/**-------------------------------Routes Agences--------------------------------- */
Route::get('/agence',[
    'as' => 'agence',
    'uses' => 'AgenceController@index'
]);
Route::get('/showAgences',[
    'as' => 'showAgences',
    'uses' => 'AgenceController@showAgence'
]);
Route::post('/addAgence',[
    'as' => 'createAgence',
    'uses' => 'AgenceController@createAgence'
]);
/**----------------------------Fin Routes Agences-------------------------------- */
/**-------------------------------Routes Reservations---------------------------- */
Route::get('/reservation',[
    'as' => 'reservation',
    'uses' => 'ReservationController@index'
]);
Route::post('/addReservation',[
    'as' => 'addReservation',
    'uses' => 'ReservationController@createReservation'
]);
Route::get('/list',[
    'as' => 'showReservation',
    'uses' => 'ReservationController@showReservation'
]);
Route::get('/verification',[
    'as' => 'verification',
    'uses' => 'ReservationController@verifierReservation'
]);
Route::post('/valider',[
    'as' => 'valider',
    'uses' => 'ReservationController@validerReservation'
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
Route::get('/showAgents',[
    'as' => 'showAgents',
    'uses' => 'AgentController@showAgent'
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
Route::get('/showGuichets',[
    'as' => 'showGuichets',
    'uses' => 'GuichetController@showGuichet'
]);
/**----------------------------Fin Routes Guichets-------------------------------- */