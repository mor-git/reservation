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
    public function listRegion()
    {
        $region = Region::all();
        echo json_encode($region);
        //echo $region;
        //return $region;
    }
    public function listVilleById($id)
    {
        $ville = Ville::where('region_id', $id)->get();
        echo json_encode($ville);
        //return $ville;
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
       $agence->latitude     = $params['lat'];
       $agence->longitude    = $params['lng'];
       $agence->phone        = $params['phone'];
       $agence->structure_id = $params['structure'];

       $agence->save();

       return redirect('showAgences');
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
