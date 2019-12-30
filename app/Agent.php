<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Agent extends Model
{
    public function agences(){
        return $this->belongsTo('App\Agence', 'agence_id');
    }
}
