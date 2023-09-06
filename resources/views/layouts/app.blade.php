<!DOCTYPE html> <html lang="en"> <head>
<Link href=
"https://fonts.googleapis.com/css?family-Nunito: 200,600" rel="stylesheet">
<!-- Bootstrap -->
<link rel="stylesheet" href="{{asset ('css/app.css')}}">
<!-- Scripts-->
<link href="{{ asset('bootstrap-5.3.1-dist/css/bootstrap.css') }}" rel="stylesheet">
    <script src="{{ asset('bootstrap-5.3.1-dist/js/bootstrap.js') }}"></script> <meta charset="UTF-8"> 
<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
<meta http-equiv="X-UA-Compatible" content="ie=edge"> 
<title>PlanetExtra</title>
</head> 
<body> 
    @include('components/meldingen')
    <x-navbar/>
    <div class="text-center container mt-5" >
        @yield('content')
    </div>

</body> 
</html>