<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ville;

class ApiVilleController extends Controller
{
    public function showVilles($id)
    {
        $villes = Ville::where('region_id', $id)->get();
        return json_encode($villes);
    }
}
