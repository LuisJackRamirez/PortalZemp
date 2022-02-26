<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Comude Zempoala</title>
    <!--    CSS Bootstrap   -->
    <link crossorigin="anonymous" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" rel="stylesheet">
    <!--    CSS Bootstrap Icons     -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <!--    CSS Global      -->
    <link href="css/global.css" rel="stylesheet">
</head>
<body>
<!-- Header -->
<div class="container-fluid">
    <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom ">
        <a href="index.html" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
            <svg class="bi me-2" width="40" height="32">
                <use/>
            </svg>
            <img src="{{ asset('images/escudo-estado.png') }}" class="bi me-2" width="111" height="110" alt="Escudo">
        </a>

        <ul class="nav nav-pills align-items-center">
            <li class="nav-item"><a href="#" class="nav-link text-muted" aria-current="page">Inicio</a></li>
            <li class="nav-item"><a href="#" class="nav-link text-muted">¿Quiénes somos?</a></li>
            <li class="nav-item"><a href="#" class="nav-link text-muted">Servicios</a></li>
            <li class="nav-item"><a href="#" class="nav-link text-muted">Contáctanos</a></li>
        </ul>
    </header>
</div>

@yield('content')

<!--    JS Bootstrap   -->
<script crossorigin="anonymous"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
