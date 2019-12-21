<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Agence;

class AgenceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('agences.addAgence');
    }
    public function compteur(Request $request)
    {
        $compte = 0;
        if(isset($_POST['btn'])){
            $compte = $compte + 1;
        }else{
            $compte;
        }
        return view('agences/showAgence', ['teur' => $compte]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createAgence(Request $request)
    {
       $params = $request->except(['_token']);

       $agence = new Agence();
       $agence->name         = $params['name'];
       $agence->region       = $params['region'];
       $agence->ville        = $params['ville'];
       $agence->latitude     = $params['latitude'];
       $agence->longitude    = $params['longitude'];
       $agence->phone        = $params['phone'];
       $agence->login        = $params['login'];
       $agence->password     = $params['pwd'];
       $agence->structure_id = 1;
       //$agence->structure_id = $params['structure'];

       var_dump($agence);die();
       //$agence.save();

       //return view('agences/showAgence');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showAgence()
    {
        $agences = Agence::all();
        return view('agences/showAgence', ['les_agences' => $agence]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
