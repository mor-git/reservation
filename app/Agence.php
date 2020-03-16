<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Agence extends Model
{
    public function structures(){
        return $this->belongsTo('App\Structure', 'structure_id');
    }
    public function regions(){
        return $this->belongsTo('App\Region', 'region_id');
    }
    public function villes(){
        return $this->belongsTo('App\Ville', 'ville_id');
    }
    public function guichets(){
        return $this->howMany('App\Guichet');
    }
    public function users(){
        return $this->howMany('App\User');
    }
}
