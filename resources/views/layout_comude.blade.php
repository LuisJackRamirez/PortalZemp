<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <!--    CSS Bootstrap   -->
    <link crossorigin="anonymous" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" rel="stylesheet">
    <!--    CSS Bootstrap Icons     -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <!--    CSS Global      -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
</head>
<body>
<!-- Header -->
<nav class="sticky-top navbar-light bg-light">
<div class="container-fluid">
    <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom ">
        <a href="{{route('index')}}" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
            <svg class="bi me-2" width="40" height="32">
                <use/>
            </svg>
            <img src="{{ asset('images/LOGOTIPO-cuadrado-CHICO-.jpg') }}" class="bi me-2" width="111" height="110" alt="Escudo">
            <span class='fs-1 px-3'>ZEMPOALA 2020-2024</span>
        </a>

        <ul class="nav nav-pills align-items-center">
            <li class="nav-item"><a href="{{route('index')}}" class="nav-link text-muted" aria-current="page">Inicio</a></li>
            <li class="nav-item"><a href="{{route('about')}}" class="nav-link text-muted">¿Quiénes somos?</a></li>
            <li class="nav-item"><a href="{{route('services')}}" class="nav-link text-muted">Servicios</a></li>
            <li class="nav-item"><a href="{{route('contact')}}" class="nav-link text-muted">Contáctanos</a></li>
            <li class="nav-item"><a href="{{route('login')}}" class="nav-link text-muted">Administración</a></li>
        </ul>
    </header>
</div>
</nav>

@yield('content')


<!-- Footer -->

<div class="card container-fluid">

        <footer class="py-3 my-4">
            <ul class="nav justify-content-center border-bottom pb-3 mb-3 align-items-center">
                <li class="nav-item">
                    <a href="#" class="nav-link px-2">
                        <img src="{{ asset('images/infomex.png') }}" alt="infomex">
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link px-2">
                        <img src="{{ asset('images/policiazempoala.png') }}" alt="policia_zempoala">
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link px-2">
                        <img src="{{ asset('images/escudo-estado.png') }}" alt="escudo_estado">
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link px-2">
                        <img src="{{ asset('images/magico_cabeza-u5416.png') }}" alt="magico_cabeza" width="164" height="140">
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link px-2">
                        <img src="{{ asset('images/proteccioncivil.png') }}" alt="proteccion_civil">
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link px-2">
                        <img src="{{ asset('images/conac2.png') }}" alt="conac">
                    </a>
                </li>
            </ul>
            <p class="text-center text-muted">
                Plaza principal S/N, Col. CentroZempoala, Hgo. C.P. 43838
                <br>
                &copy; 2021
                <br>
                <a href="#" ><i class="bi bi-facebook icon text-muted"></i></a>
                <a href="#"><i class="bi bi-twitter icon text-muted"></i></a>
                <a href="#"><i class="bi bi-instagram icon text-muted"></i></a>
                <a href="#"><i class="bi bi-youtube icon text-muted"></i></a>
            </p>
            <p class="text-start icon-fixed">

            </p>
        </footer>
</div>

<!--    JS Bootstrap   -->
<script crossorigin="anonymous"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
