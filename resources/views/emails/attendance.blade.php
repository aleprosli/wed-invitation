<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Engagement</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css2?family=Berkshire+Swash&display=swap" rel="stylesheet">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    
</head>
    <style>
        body {
            font-family: 'Poppins';
            font-size: 12px;
            text-align: center;
            border: 5px solid black;
            outline:  solid 1px;
            margin: auto;  
            padding: 20px;
            text-align: center;
        }
    
        h1 { font-family: 'Berkshire Swash'}
        
    </style>

    <body class="bg-white">
        <div id="app">
            <div class="container bg-white">
                <div class="row justify-content-center">
                    <div class="col-md-12 text-center px-2">
                        <i class='bx bx-male-female'></i>
                        <h6>Undangan Majlis Pertunangan</h6>
                        
                    </div>
                    <div class="row text-muted text-center">
                        <h6> Assalamualaikum W.B.T </h6>
                    </div>
                    <div class="row text-center">
                        <h1> Aliff </h1>
                    </div>
                    <div class="row text-center">
                        <h1> & </h1>
                    </div>
                    <div class="row text-center">
                        <h1> Izzati </h1>
                    </div>
                    <div class="row text-muted text-center mt-2">
                        <h6> Dengan segala hormatnya menjemput </h6>
                    </div>
                    <div class="row text-center">
                        <h5> {{ $name }} </h5>
                    </div>
                    <div class="row text-muted text-center mt-2">
                        <h6> bersama suami/isteri sekeluarga ke majlis pertunangan putera  kami bersama pilihan hatinya </h6>
                    </div>
                    <div class="row text-center mt-2">
                        <h6> Bertempat di</h6>
                    </div>
                    <div class="row text-muted text-center mt-2">
                        <div class="grid grid-cols-2">
                            <a href="#" class="btn btn-sm btn-light">Google Maps</a>
                            <a href="#" class="btn btn-sm btn-light">Waze</a>
                        </div>
                    </div>
                    <div class="row text-muted text-center mt-4">
                        <h6> Pada Tarikh/Hari</h6>
                    </div>
                    <div class="row text-center mt-2">
                        <h1> Tarikh September, Hari</h1>
                    </div>
                </div>
            </div>
        </div>
    </body>

    <footer class="row text-center mt-5">
        <h4 class="text-muted">Made by Aliff Rosli</h4>
    </footer>
</html>
