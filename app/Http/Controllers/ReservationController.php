<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reservation;
use App\Structure;
use App\Agence;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('reservations/addReservation');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createReservation(Request $request)
    {
        $reservation = new Reservation();
        $reservation->date = $request->date;
        $reservation->phone = $request->phone;
        $reservation->number = $request->numero;
        $reservation->agence_id = $request->agence;

        //var_dump($reservation);die();
        //$reservation->save();
        return view('reservations/showReservation');
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
     * 
     */
    public function verifierReservation()
    {
        //$structures = Structure::all();
       // $agences    = Agence::all();
       // return view('reservations/verification',['les_structures'=>$structures,'les_agences'=>$agences]);
        return view('reservations/verification');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showReservation()
    {
        $reservations = Reservation::all();
        return view('reservations/showReservation', ['les_reservations' => $reservations]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
