<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Region;

class ApiRegionController extends Controller
{
    public function showRegions()
    {
        $regions = Region::all();
        return json_encode($regions);
    }
}
