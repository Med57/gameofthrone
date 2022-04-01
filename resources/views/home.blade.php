@extends('layout.header')

@section('content')
    <main>

<ul class="characters-list">

    @foreach($characters as $character)

        <li class="character-card">
            <a href="{{route('character',['id' => $character->id])}}">
                <div class="avatar" style="background: #{{$character->houses[0]->colour}}">
                    <img src="{{ URL::asset('/assets/img/' . $character->image)}}" alt="{{$character->first_name}}">
                </div>
                <div class="name">
                    {{$character->first_name}}
                </div>
            </a>
         </li>
    @endforeach
    </main>
</html>
@stop
