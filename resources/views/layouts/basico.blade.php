<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>@yield('titulo')</title>
    <!-- MDB icon -->
    <link rel="icon" href="{{ asset('img/favicon.ico') }}" type="image/x-icon" />
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
    <nav class="navbar sticky-top navbar-expand-lg navbar-light scrolling-navbar bg-white shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="{{ route('index') }}">
                <img src="{{ asset('img/logo.png') }} " height="40" alt="mdb logo">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-7"
                aria-controls="navbarSupportedContent-7" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent-7">
                <ul class="navbar-nav ml-auto font-weight-bold">
                    <li class="nav-item font-weight-bold">
                        <a class="nav-link" href="{{ route('index') }}">INICIO</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('sobre') }}">SOBRE NÓS</a>
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
                        <a class="nav-link" href="{{ route('contato') }}">CONTATO</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main>
        @yield('main')
    </main>

    <!-- Footer -->
    <footer class="page-footer font-small stylish-color-dark pt-4 ">

        <!-- Footer Links -->
        <div class="container text-center text-md-left">

            <!-- Grid row -->
            <div class="row">

                <!-- Grid column -->
                <div class="col-md-4 mx-auto">

                    <!-- Content -->
                    <h5 class="font-weight-bold text-uppercase mt-3 mb-4">BELTRAME ENGENHARIA</h5>
                    <p>Here you can use rows and columns to organize your footer content. Lorem ipsum dolor sit amet,
                        consectetur
                        adipisicing elit.</p>

                </div>
                <!-- Grid column -->

                <hr class="clearfix w-100 d-md-none">

                <!-- Grid column -->
                <div class="col-md-2 mx-auto">

                    <!-- Links -->
                    <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Links</h5>

                    <ul class="list-unstyled">
                        <li>
                            <a href="{{ route('sobre') }}">Sobre nós</a>
                        </li>
                        <li>
                            <a href="#!">Serviços</a>
                        </li>
                        <li>
                            <a href="#!">Certificações</a>
                        </li>
                    </ul>

                </div>
                <!-- Grid column -->

                <hr class="clearfix w-100 d-md-none">

                <!-- Grid column -->
                <div class="col-md-2 mx-auto">

                    <!-- Links -->
                    <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Links</h5>

                    <ul class="list-unstyled">
                        <li>
                            <a href="#!">Arquivos</a>
                        </li>
                        <li>
                            <a href="#!">Areá do Cliente</a>
                        </li>
                        <li>
                            <a href="{{ route('contato') }}">Contato</a>
                        </li>
                    </ul>

                </div>
                <!-- Grid column -->


            </div>
            <!-- Grid row -->

        </div>
        <!-- Footer Links -->

        <hr>

        <!-- Social buttons -->
        <ul class="list-unstyled list-inline text-center">
            <li class="list-inline-item">
                <a class="btn-floating btn-fb mx-1">
                    <i class="fab fa-facebook-f fb-text fa-lg"> </i>
                </a>
            </li>
            <li class="list-inline-item">
                <a class="btn-floating btn-tw mx-1">
                    <i class="fab fa-twitter twitter-text fa-lg"> </i>
                </a>
            </li>
            <li class="list-inline-item">
                <a class="btn-floating btn-gplus mx-1">
                    <i class="fab fa-google-plus-g google-text fa-lg"> </i>
                </a>
            </li>
            <li class="list-inline-item">
                <a class="btn-floating btn-li mx-1">
                    <i class="fab fa-linkedin-in"> </i>
                </a>
            </li>
            <li class="list-inline-item">
                <a class="btn-floating btn-dribbble mx-1">
                    <i class="fab fa-dribbble"> </i>
                </a>
            </li>
        </ul>
        <!-- Social buttons -->

        <!-- Copyright -->
        <div class="footer-copyright text-center py-3">© 2021 Copyright:
            <a href="https://mdbootstrap.com/"> MDBootstrap.com</a>
        </div>
        <!-- Copyright -->

    </footer>
    <!-- Footer -->

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
    <script>
        $(document).ready(function() {
            new WOW().init();
        });

    </script>
</body>

</html>
