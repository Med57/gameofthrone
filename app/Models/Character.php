<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Character extends Model{

    protected $table = 'character';

    public function title(){

        return $this->belongsTo('App\Models\Title', 'id_title');

    }

    public function houses(){

        return $this->belongsToMany('App\Models\House', 'house_has_characters', 'character', 'house');

    }


}
