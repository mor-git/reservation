<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TypeStructure;

class TypeStructureController extends Controller
{

    public function index()
    {
        return view('type_structures/addTypeStructure');
    }

    public function createTypeStructure(Request $request)
    {
        $name = $request->input('type');
        $typeStructure = new TypeStructure();
        $typeStructure->type = $name;
       
        $typeStructure->save();
        return redirect('typeStructure');

    }

    public function showTypeStructure()
    {
        $structures_type = TypeStructure::all();
        return view('type_structures/showTypeStructure', ['les_types_structures' => $structures_type]);
    }

    public function editTypeStructure($id)
    {
        $structure_type = TypeStructure::find($id);
        return view('type_structures/editTypeStructure', ['le_structure' => $structure_type]);
    }

}
