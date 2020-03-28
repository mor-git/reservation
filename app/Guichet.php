<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Guichet extends Model
{
    public function agence(){
        return $this->belongsTo('App\Agence', 'agence_id');
    }
    public function compteur(){
        return $this->belongsTo('App\Compteur', 'compteur_id');
    }
    
}
