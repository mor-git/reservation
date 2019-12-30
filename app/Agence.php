<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Agence extends Model
{
    public function structures(){
        return $this->belongsTo('App\Structure', 'structure_id');
    }
    public function guichets(){
        return $this->howMany('App\Guichet');
    }
    public function agents(){
        return $this->howMany('App\Agent');
    }
}
