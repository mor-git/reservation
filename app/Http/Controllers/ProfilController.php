<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Profil;

class ProfilController extends Controller
{
    public function index()
    {
        return view('profils.addProfil');
    } 
    public function createProfil(Request $request)
    {
        $profil = new Profil();
        $profil->libelle = $request->libelle;
        $profil->save();
        
        return redirect('profil');
    }
}
