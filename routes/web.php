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
/**-------------------------------Routes Types Structures------------------------------ */
Route::get('/typeStructure',[ 
    'as' => 'typeStructure',
    'uses' => 'TypeStructureController@index'
]);
Route::post('/addTypeStructure',[
    'as' => 'createTypeStructure',
    'uses' => 'TypeStructureController@createTypeStructure'
]);
Route::get('/showTypeStructures',[
    'as' => 'showTypeStructures',
    'uses' => 'TypeStructureController@showTypeStructure'
]);
/**------------------------------Fin Routes Types Structures ------------------------ */
/**-------------------------------Routes Profils------------------------------ */
Route::get('/profil',[
    'as' => 'profil',
    'uses' => 'ProfilController@index'
]);
Route::post('/addProfil',[
    'as' => 'createProfil',
    'uses' => 'ProfilController@createProfil'
]);
Route::get('/showProfils',[
    'as' => 'showProfils',
    'uses' => 'ProfilController@showProfil'
]);
/**------------------------------Fin Routes Profils ------------------------ */
/**-------------------------------Routes Structures------------------------------ */
Route::get('/structure',[
    'as' => 'structure',
    'uses' => 'StructureController@index'
]);
Route::post('/addStructure',[
    'as' => 'createStructure',
    'uses' => 'StructureController@createStructure'
]);
Route::get('/editStructure/{id}',[
    'as' => 'editStructure',
    'uses' => 'StructureController@editStructure'
]);
Route::post('/updateStructure/{id}',[
    'as' => 'updateStructure',
    'uses' => 'StructureController@updateStructure'
]);
Route::get('/showStructures',[
    'as' => 'showStructures',
    'uses' => 'StructureController@showStructure'
]);
/**----------------------------Fin Routes Structures----------------------------- */
/**-------------------------------Routes Agences--------------------------------- */
/**--Ajax Chargement Région département--*/
Route::get('/listeregion',[
    'as' => 'listeregion',
    'uses' => 'AgenceController@listeregion'
]);
Route::get('/listedepartement/{id}',[
    'as' => 'listedepartement',
    'uses' => 'AgenceController@listedepartement'
]);
/**--Fin Ajax Chargement Région département--*/
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
Route::get('/editGuichet/{id}',[
    'as' => 'editGuichet',
    'uses' => 'GuichetController@editGuichet'
]);
Route::post('/updateGuichet/{id}',[
    'as' => 'updateGuichet',
    'uses' => 'GuichetController@updateGuichet'
]);
/**----------------------------Fin Routes Guichets-------------------------------- */
/**-------------------------------Routes Compteurs------------------------------ */
Route::get('/ticket/{id}',[
    'as' => 'ticket',
    'uses' => 'CompteurController@totalTicket'
]);
Route::get('/utiliser/{id}',[
    'as' => 'utiliser',
    'uses' => 'CompteurController@ticketUtilise'
]);
Route::get('/compteur',[
    'as' => 'compteur',
    'uses' => 'CompteurController@index'
]);
Route::post('/addCompteur',[
    'as' => 'createCompteur',
    'uses' => 'CompteurController@createCompteur'
]);
Route::get('/showCompteurs',[
    'as' => 'showCompteurs',
    'uses' => 'CompteurController@showCompteur'
]);
/**------------------------------Fin Routes Compteurs ------------------------ */