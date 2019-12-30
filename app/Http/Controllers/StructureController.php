<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Structure;

class StructureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('structures/addStructure');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createStructure(Request $request)
    {
        $logo = $request->input('logo');
        $name = $request->input('nom');
        $structure = new Structure();
        $structure->logo = $logo;
        $structure->name = $name;
       
        $structure->save();
        return view('structures/showStructure'); 
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
    public function showStructure()
    {
        $structures = Structure::all();
        return view('structures/showStructure', ['les_structures' => $structures]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editStructure($id)
    {
        $structure = Structure::find($id);
        return view('structures.editStructure', ['le_structure' => $structure]);
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
