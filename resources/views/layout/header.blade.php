<!DOCTYPE html>
<html lang="fr"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ URL::asset('/assets/css/app.css')}}" >
    <title>Game of Thrones</title>
</head>
<body>
    <header>
        <h1>Game of Thrones</h1>
        <nav>
            <ul>
                <li><a href="{{route('list')}}">Personnages</a></li>
                <li><a href="{{route('house')}}">Maisons</a></li>
            </ul>
        </nav>
        <div class="separator"></div>
    </header>

    @yield('content')
