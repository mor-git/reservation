<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Agence;
use App\Profil;

class MyUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $agences = Agence::all();
        $profils = Profil::all();
        return view('users.addUsers' , ['les_agences' => $agences, 'les_profils' => $profils]);
    }

    public function seloger(Request $request)
    {
        $mail = $request->input('email');
        $pwd  = $request->input('password');

        $user = User::where('email', $mail)->first();
        //var_dump($user);die();
        if($user){
            return view('index');
        }else{
            redirect('/');
        }
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createUser(Request $request)
    { 
        $params = $request->except(['_token']);
        
        $user = new User();
        $user->name = $params['name'];
        $user->phone = $params['phone'];
        $user->email = $params['mail'];
        $user->password = bcrypt($params['password']);
        $user->agence_id = $params['agence'];
        $user->profil_id = $params['profil'];
        
        $user->save(); 
        return redirect('showUsers');
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
    public function showUser()
    {
        $users = User::all();
        return view('users.showUsers', ['les_users' => $users]);
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
