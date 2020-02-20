<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Structure;
use App\TypeStructure;

class StructureController extends Controller
{
   
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $type_structure = TypeStructure::all();
        return view('structures/addStructure',['types' => $type_structure]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createStructure(Request $request)
    {
        $request->validate([
            'logo' => 'required|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'nom'  => 'required',
            'type' => 'required',
        ]);

        // Save image
        $path = basename ($request->logo->store('logos'));
        // Save thumb
        /*$image = InterventionImage::make ($request->image)->widen (500)->encode ();
        Storage::put ('thumbs/' . $path, $image);*/
        // Save in base
        $structure = new Structure();
        $structure->logo = $path;
        $structure->name = $request->nom;
        $structure->typeStructure_id = $request->type;
        
        /*$request->user()->images()->save($image);*/
        $structure->save(); 
        return redirect('structure');
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
        return view('structures/editStructure', ['le_structure' => $structure]);
    }
    /**
     * 
     * 
     */
    public function updateStructure(Request $request, $id){
        $request->validate([
            'logo' => 'required',
            'nom' => 'required',  
        ]);

        $struct = Structure::find($id);
        $struct->logo = $request->get('logo');
        $struct->name = $request->get('nom');
        $struct->save();

        return redirect('/showStructures')->with('success', 'Structure updated!');
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
