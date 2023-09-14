<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('titulo')</title>

    <link rel="stylesheet" href="/assets/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    {{-- Cabeçalho --}}
    <header class="py-4">
        <div id="container" class="d-flex flex-wrap justify-content-center">
            <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
                <span class="fs-4">Vinni<span style="color:#0d6efd; font-weight:600;">Eventos</span></span>
            </a>

            <ul class="nav nav-pills">
                <li class="nav-item"><a href="/" class="nav-link">Início</a></li>
                <li class="nav-item"><a href="/eventos/criar" class="nav-link">Criar Evento</a></li>
                <li class="nav-item"><a href="/contato" class="nav-link">Contato</a></li>
                <li class="nav-item"><a href="/" class="nav-link active">Cadastrar-se</a></li>
            </ul>
        </div>
    </header>
    {{----}}

    {{-- Conteudo --}}
    <section class="conteudo">

        @yield('conteudo')

    </section>
    {{----}}

    {{-- Rodapé --}}
    <footer class="border-top">
        <div id="container" class="d-flex flex-column flex-md-row flex-wrap justify-content-between align-items-center py-3">
            <div class="d-flex flex-column flex-md-row align-items-center">
                <a href="/" class="mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1">
                    <img src="/assets/img/logo-vinni.svg" style="width:72px">
                </a>
                <span class="mb-3 mb-md-0 text-muted">&copy; 2023, Desenvolvido por VinniGomes</span>
            </div>

            <ul class="nav justify-content-end list-unstyled d-flex">
                <li class="ms-3"><a class="text-muted" href="#"><ion-icon name="logo-github"></ion-icon></a></li>
                <li class="ms-3"><a class="text-muted" href="#"><ion-icon name="logo-linkedin"></ion-icon></a></li>
                <li class="ms-3"><a class="text-muted" href="#"><ion-icon name="logo-instagram"></ion-icon></a></li>
            </ul>
        </div>
    </footer>
    {{----}}


    {{-- JS SCRIPTS --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    {{----}}
</body>
</html>
