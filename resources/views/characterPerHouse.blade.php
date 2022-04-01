@extends('layout.header')

@section('content')
    <main>
        <div class="wrapper">
            <h2>{{$characterPerHouse[$houseId]->name}}</h2>
            <ul class="characters-list">
                @foreach($characterPerHouse[$houseId]->character as $character)
                    <li class="character-card">
                        <a href="{{route('character',['id' => $character->id])}}">
                            <div class="avatar" style="background: #{{$characterPerHouse[$houseId]->colour}};">
                                <img src="{{ URL::asset('/assets/img/' . $character->image)}}" alt="{{$character->first_name}}">
                            </div>
                            <div class="name">
                                {{$character->first_name." ".$character->last_name}}
                            </div>
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>
    </main>
</body>
</html>
@stop
