<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Structure extends Model
{
    public function agences(){
        return $this->hasMany('App\Agence');
    }
    
}
