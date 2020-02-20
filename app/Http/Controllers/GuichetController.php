<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Guichet;
use App\Agence;
use App\Compteur;

class GuichetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $agence = Agence::all();
        $compteur = Compteur::all();
        return view('guichets.addGuichet',['agences' => $agence , 'compteurs' => $compteur]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createGuichet(Request $request)
    {
        $guichet = new Guichet();
        $guichet->name = $request->nom;
        $guichet->agence_id = $request->agence;
        $guichet->compteur_id = $request->compteur; 

        $guichet->save();
        //return view('guichets/showGuichet');
        return redirect('guichet');
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
    public function showGuichet() 
    {
        $guichets = Guichet::all();
        return view('guichets/showGuichet' , ['les_guichets' => $guichets]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editGuichet($id)
    {
        $guichet = Guichet::find($id);
        $agences = Agence::all();
        return view('guichets.editGuichet',['guichet' => $guichet , 'agences' => $agences]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateGuichet(Request $request, $id)
    {
        $request->validate([
            'nom' => 'required',
            'agence' => 'required'
        ]);
        $guichet = Guichet::find($id);
        $guichet->name = $request->get('nom');
        $guichet->agence_id = $request->get('agence');
        $guichet->save();

        return redirect('/showGuichets');
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
