<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AffecterA_G;
use App\Guichet;
use App\User;
use App\Agence;
use App\Compteur;

class AffecterA_GController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response   addGuichet
     */
    public function index($id)
    {
        $agents = User::where('agence_id',$id)->get();
        $guichets = Guichet::where('agence_id',$id)->get();
        return view('affectations.affecterA_G', ['agents'=> $agents , 'guichets'=> $guichets]);
    }
    public function indexGuichet($id)
    {
        $agence = Agence::find($id);
        $guichet = Guichet::where('agence_id',$id)->get();
        return view('affectations.newGuichet', ['agence'=> $agence , 'guichet'=> $guichet]);
    }
    public function indexAgent($id)
    {
        
        return view('affectations.newAgent');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createAffectation(Request $request)
    {
        $agent = $request->input('agent');
        $guichet = $request->input('guichet');
        $affectation = new AffecterA_G();
        $affectation->user_id   = $agent;
        $affectation->guichet_id = $guichet;
        $affectation->dateAffectation = date("Y-m-d H:i:s");

       // dd(Auth::user());
        $affectation->save();

        return view('affectations.affecterA_G');
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
    public function listGuichet($id)
    {
        $guichets = Guichet::where('agence_id', $id)->get();
        $agence = Agence::find($id);
        return view('affectations.listGuichet',['les_guichets'=> $guichets , 'agence'=> $agence]);
    }

    public function listAgent($id)
    {
        $agents = User::where('agence_id', $id)->get();
        return view('affectations.listAgent',['les_agents'=> $agents]);
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
