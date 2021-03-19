<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>@yield('titulo')</title>
    <!-- MDB icon -->
    <link rel="icon" href="{{ asset('img/mdb-favicon.ico') }}" type="image/x-icon" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <!-- Material Design Bootstrap -->
    <link rel="stylesheet" href="{{ asset('css/mdb.min.css') }}">
    <!-- Your custom styles (optional) -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <!-- Start your project here-->
    <nav class="mb-1 navbar navbar-expand-lg navbar-light bg-white shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="{{ asset('img/logo.png') }} " height="40" alt="mdb logo">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-7"
                aria-controls="navbarSupportedContent-7" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent-7">
                <ul class="navbar-nav mr-auto font-weight-bold">
                    <li class="nav-item font-weight-bold">
                        <a class="nav-link" href="#">INICIO</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">SOBRE NÓS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">FORMULÁRIOS</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-7" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">PROCEDIMENTOS</a>
                        <div class="dropdown-menu dropdown-pink" aria-labelledby="navbarDropdownMenuLink-7">
                            <a class="dropdown-item" href="#">PROCEDIMENTOS DE QUALIFICAÇÃO</a>
                            <a class="dropdown-item" href="#">PROCEDIMENTOS DE CERTIFICAÇÃO</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">CONTATO</a>
                    </li>
                </ul>
                <form class="form-inline">
                    <div class="md-form my-0">
                        <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
                    </div>
                </form>
            </div>
        </div>
    </nav>

    @yield('main')

    <!-- End your project here-->
    <!-- jQuery -->
    <script type="text/javascript" src="{{ asset('js/jquery.min.js') }}"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="{{ asset('js/popper.min.js') }}"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="{{ asset('js/mdb.min.js') }}"></script>
    <!-- Your custom scripts (optional) -->
</body>

</html>
