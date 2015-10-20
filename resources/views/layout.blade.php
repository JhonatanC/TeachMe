<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    {!! Html::style('/css/style.css') !!}
    {!! Html::style('/css/normalize.css') !!}
    {!! Html::style('/css/foundation.css') !!}
</head>
<body>
<nav>
    <ul>
        <li><a href="{{ route('tickets.latest') }}">Listas</a></li>
        <!--<li><a href="{{-- route('tickets.populares') --}}">Populares</a></li>-->
    </ul>
</nav>
    <div class="row">
        @yield('content')
    </div>
</body>
</html>