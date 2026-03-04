<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Nintendo Figuras</title>
    <!-- Bootstrap & estilos -->
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet" />
    <!-- Font Awesome -->
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" />
</head>
<body id="page-top">
    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand" href="/">Nintendo Figuras</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarResponsive">
                Menu
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="/mario">Mario</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/zelda">Zelda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/pokemon">Pokémon</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- CONTENIDO DINÁMICO -->
    @yield('content')
    <!-- FOOTER -->
    <footer class="footer py-4 bg-light">
        <div class="container text-center">
            <p>© 2026 Nintendo Figuras - Proyecto Laravel</p>
        </div>
    </footer>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Scripts del tema -->
    <script src="{{ asset('js/scripts.js') }}"></script>
</body>
</html>