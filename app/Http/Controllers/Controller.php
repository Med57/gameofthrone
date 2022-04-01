<?php

namespace App\Http\Controllers;

use App\Models\House;
use App\Models\Character;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Laravel\Lumen\Routing\Controller as BaseController;

class Controller extends BaseController
{

    public function characterList(){


        $characters = Character::all()->load('houses');

        return view('home', ['characters' => $characters] );

    }

    public function character($id){

        $allCharacters = Character::all();

        $character = Character::find($id)->load('houses', 'title');

        dump($character);

        return view('character', ['character' => $character, 'allCharacters' => $allCharacters]);

    }

    public function houseList(){

        $allHouses = House::all();

        return view('houses', ['allHouses' => $allHouses]);

    }

    public function characterPerHouse($id){

        $houseId = $id - 1 ;

        $characterPerHouse = House::all()->load('character')->where('id', $id);

        return view('characterPerHouse', ['characterPerHouse' => $characterPerHouse, 'houseId' => strval($houseId)]);

    }


}
