<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Compteur;

class CompteurController extends Controller
{

    public function index()
    {   
        return view('compteurs.addCompteur');
    }
    
    public function createCompteur(Request $request)
    {
       $libelle = $request->input('libelle');
       
       $compteur = new Compteur();
       $compteur->libelle        = $libelle;
       $compteur->totalTicket    = 0;
       $compteur->ticketUtiliser = 0;

       $compteur->save();
       return redirect('compteur');
    } 

    public function showCompteur()
    {   
        $compteurs = Compteur::all();
        return view('compteurs/showCompteur', ['compt' => $compteurs]);
    }

    public function totalTicket(Request $request, $id) 
    {
       $tickets = Compteur::find($id);
       $valeur = $tickets->totalTicket;
       $totals = $valeur + 1;
       $tickets->totalTicket = $totals;
       $tickets->save();

       echo $totals; 
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

       echo $nbrs;
      // return view('index',['utiliser' => $nbrs, 'ticketutiliser' => $tickets]);
    }

    public function reinitialiser(Request $request, $id)
    {
       $tickets = Compteur::find($id);
       $tickets->totalTicket   = 0;
       $tickets->ticketUtiliser = 0;
       $tickets->save();

       echo $tickets;
      // return view('index',['utiliser' => $nbrs, 'ticketutiliser' => $tickets]);
    }
}
