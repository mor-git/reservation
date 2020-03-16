<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ville extends Model
{

    public function regions(){
        return $this->belongsTo('App\Region','region_id');
    }
}
