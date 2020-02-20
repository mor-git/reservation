<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Compteur;

class CompteurController extends Controller
{

    public function index()
    {   
        $compteurs = Compteur::all();
        return view('compteurs.addCompteur', ['compt' => $compteurs]);
    }
    
    public function createCompteur(Request $request)
    {
       $libelle = $request->input('libelle');
       
       $compteur = new Compteur();
       $compteur->libelle        = $libelle;
       $compteur->totalTicket    = 0;
       $compteur->ticketUtiliser = 0;

       $compteur->save();
       return view('compteurs/showCompteur');
    }
    public function totalTicket(Request $request, $id) 
    {
       $tickets = Compteur::find($id);
       $valeur = $tickets->totalTicket;
       $totals = $valeur + 1;
       $tickets->totalTicket = $totals;
       $tickets->save();
       //return redirect()->route('/', [$tickets, $totals]);
       //return view('index',['total' => $totals, 'tickettotal' =>  $tickets]);
    }
    public function ticketUtilise(Request $request, $id)
    {
       $tickets = Compteur::find($id);
       $valeur = $tickets->ticketUtiliser;
       $nbrs = $valeur + 1;
       $tickets->ticketUtiliser = $nbrs;
       $tickets->save();
       return view('index',['utiliser' => $nbrs, 'ticketutiliser' => $tickets]);
    }
}
