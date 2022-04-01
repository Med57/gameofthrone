@extends('layout.header')

@section('content')
    <main>
        <div class="wrapper">
            <section class="character-page">
                <div class="col-8">
                    <h2>{{$character->first_name ." ".$character->last_name}} </h2>
                    <div class="bio">
                        <h3>Biographie</h3>
                        <p>
                            {{$character->biography}}
                        </p>
                    </div>
                </div>
                <div class="col-4">
                    <div class="avatar" style="background: #{{$character->houses[0]->colour}};">
                        <img src="{{ URL::asset('/assets/img/' . $character->image)}}" alt="{{$character->first_name}}">
                    </div>
                    <div class="infos">
                        <h3>Maisons</h3>
                        <div class="houses">
                            <ul>
                                @foreach($character->houses as $characterHouse)
                                <li class="house-logo" style="background: #{{$characterHouse->colour}};">
                                    <a href="{{route('characterPerHouse',['id' => $characterHouse->id])}}">
                                        <img src="{{ URL::asset('/assets/img/houses/'. $characterHouse->image )}}" alt="{{$characterHouse->name}}">
                                    </a>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                        <ul class="meta">
                            <li><span>Rang : </span> {{$character->title->name}}</li>
                            <li><span>Mère : </span> {{!empty($character->mother_id) ? $allCharacters[$character->mother_id - 1]->first_name ." ". $allCharacters[$character->mother_id - 1]->last_name : "Non renseigné" }} </li>
                            <li><span>Père : </span> {{!empty($character->father_id) ? $allCharacters[$character->father_id - 1]->first_name ." ". $allCharacters[$character->father_id - 1]->last_name : "Non renseigné" }} </li>
                        </ul>
                    </div>
                </div>
            </section>
        </div>
    </main>
</html>
@stop
