<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Structure;

class ApiStructureController extends Controller
{
    public function index()
    {
        $structures = Structure::all();
        return json_encode($structures);
    }
}
