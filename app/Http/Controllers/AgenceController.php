<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Agence;
use App\Structure;
use App\Region;
use App\Ville;

class AgenceController extends Controller
{
    /**
     * Display a listing of the resource. 
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stuctures = Structure::all();
        $regions   = Region::all();
        $villes    = Ville::all();
        //return view('layouts.test');
        //return view('layouts.addStructure', ['les_structures' => $stuctures]);
        return view('agences.addAgences', ['les_structures' => $stuctures, 'les_regions' => $regions, 'les_villes' => $villes,]);
    }
    public function listeregion()
    {
        $region = array(
            array("idR"=>1, "nomR"=>"Thies"),
            array("idR"=>2, "nomR"=>"Tamba")
        );
        echo json_encode($region);
    }
    public function showRegion()
    {
        $region = Region::all();
        return $region;
    }
    public function selectVille($idR)
    {
        $partement = array();

        if($idR == 1){
            $partement = array(
                array("idV"=>1, "nomV"=>"Thies", "idR"=>$idR),
                array("idV"=>2, "nomV"=>"Tivaouane", "idR"=>$idR),
                array("idV"=>3, "nomV"=>"Mbour", "idR"=>$idR)
            );
        }
        if($idR == 2){
            $partement = array(
                array("idV" => 1, "nomV" => "Tamba1", "idR" => $idR),
                array("idV" =>2, "nomV"=>"Tamba2", "idR"=>$idR),
                array("idV"=>3, "nomV"=>"Tamba3", "idR"=>$idR)
            );
        }
        echo json_encode($partement);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createAgence(Request $request)
    {
       $params = $request->except(['_token']);

       var_dump($params);die();
       
       $agence = new Agence();
       $agence->name         = $params['name'];
       $agence->region       = $params['region'];
       $agence->ville        = $params['ville'];
       $agence->latitude     = $params['latitude'];
       $agence->longitude    = $params['longitude'];
       $agence->phone        = $params['phone'];
       $agence->login        = $params['login'];
       $agence->password     = $params['pwd'];
       $agence->structure_id = $params['structure'];

       $agence->save();

       return view('agences/showAgence');
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
        return view('agences/showAgence', ['les_agences' => $agences]);
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
