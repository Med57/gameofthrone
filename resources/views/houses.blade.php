@extends('layout.header')

@section('content')
    <main>
        <div class="wrapper">
            <ul class="houses-list">
                @foreach($allHouses as $house)
                    <li class="house-logo" style="background: #{{$house->colour}}">
                        <a href="{{route('characterPerHouse', [ 'id' => $house->id ])}}">
                            <img src="{{ URL::asset('/assets/img/houses/' . $house->image)}}" alt="{{$house->name}}">
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>
    </main>
</body>
</html>
@stop

