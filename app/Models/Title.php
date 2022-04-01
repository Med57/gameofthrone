<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Title extends Model{

    protected $table = 'title';

    public function character(){

        $this->belongsTo('App\Models\Character', 'id');


    }

}
