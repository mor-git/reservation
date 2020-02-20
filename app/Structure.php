<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Structure extends Model
{
    protected $fillable = [
        'logo','name'
    ];
    public function agences(){
        return $this->hasMany('App\Agence');
    }
    public function typeStructure(){
        return $this->belongsTo('App\TypeStructure','typeStructure_id');
    }
    
}
