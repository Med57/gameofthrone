<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class House extends Model{

    protected $table = "house";

    public function character(){


       return $this->belongsToMany('App\Models\Character', 'house_has_characters', 'house', 'character');
    }


}
