<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Agence extends Model
{
    public function structures(){
        return $this->belongsTo('App\Structure');
    }
}
