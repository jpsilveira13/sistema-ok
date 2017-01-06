<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>SysLab</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/principal.css')}}" rel="stylesheet" type="text/css" />
</head>
<body>
<div class="flex-center position-ref full-height">

    @if (Route::has('login'))
        <div class="top-right links">
            <a href="{{ url('/login') }}">Acessar</a>
            <a href="{{ url('/register') }}">Registrar</a>
        </div>
    @endif
    @yield('content')
</div>

</body>
</html>
