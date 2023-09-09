<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>
        
        {{-- Fonts --}}
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

        {{-- CSS Bootstrap --}}
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

        {{-- CSS da aplicação--}}
        <link rel="stylesheet" href="/assets/css/style.css">

    </head>

    <body>

        <div id="container">

            <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
                <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
                  <img src="/assets/img/hdcevents_logo.svg" style="width:64px;">
                </a>
          
                <ul class="nav nav-pills">
                  <li class="nav-item"><a href="/" class="nav-link">Eventos</a></li>
                  <li class="nav-item"><a href="/eventos/criar" class="nav-link">Criar Eventos</a></li>
                  <li class="nav-item"><a href="/" class="nav-link active">Entrar</a></li>
                </ul>
            </header>
            
            @yield('content')
    
            <footer>
                <hr>
                <p>Vinnigs Eventos &copy; 2023.</p>
            </footer>


        </div>
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    </body>

</html>
