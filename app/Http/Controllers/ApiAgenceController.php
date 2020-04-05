<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Agence;

class ApiAgenceController extends Controller
{
    public function showAgence($id)
    {
        $agences = Agence::where('structure_id',$id)->get();
        return json_encode($agences);
    }
}
