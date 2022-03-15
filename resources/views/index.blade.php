@extends('layout_comude')

@section('title', 'Comude Zempoala')

@section('content')

<!-- Carousel -->
<div id="carouselHeaderFade" class="carousel slide carousel-fade container" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselHeaderFade" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselHeaderFade" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselHeaderFade" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="{{ asset('images/ban04.jpg') }}" class="d-block w-100" alt="..." height="600">
        </div>
        <div class="carousel-item">
            <img src="{{ asset('images/banner202.jpg') }}" class="d-block w-100" alt="..." height="600">
        </div>
        <div class="carousel-item">
            <img src="{{ asset('images/banner203.jpg') }}" class="d-block w-100" alt="..." height="600">
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselHeaderFade" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselHeaderFade" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
<br>

<!-- ¿Quienes somos? -->
<div class="container card align-items-center">
    <img src="{{ asset('images/comude.png') }}" height="115" width="115" alt="comude" >
    <div class="card-body">
        <h4 class="card-title text-center">¿Quiénes somos?</h4>
        <p class="card-text justify-text">
            La actividad física es de vital importancia para desempeñarse en distintos aspectos de la vida, así como dentro de una sociedad para ser una persona integral. El deporte es forjador de disciplina, de cultura, del cuidado del cuerpo, formador de actitud y generador de una buena condición física. Cuando una persona realiza una actividad física, deportiva o recreativa adquiere un potencial para prevenir problemas físicos, psicológicos y de salud.
        </p>
        <p class="card-text justify-text">
            En nuestro municipio de Zempoala el Consejo Municipal del Deporte, tiene como enfoque principal planear y desarrollar actividades como lo es el ámbito social, cultural y deportivo y así mejorar la calidad de vida de los niños, jóvenes, adultos, personas de la tercera edad y con capacidades diferentes.
        </p>
    </div>
</div>
<br>

<!-- Servicios -->
<div class="container card align-items-center">
    <img src="{{ asset('images/comude.png') }}" height="115" width="115" alt="comude" >
    <div class="card-body">
        <h4 class="card-title text-center">Servicios</h4>
        <p class="card-text justify-text">
            El Municipio de Zempoala cuenta con una infraestructura deportiva que consiste en la Unidad Deportiva de Zempoala y la Unidad Deportiva San Mateo Tlajomulco. En nuestra disposición, hay: 
            <ul>
                <li>9 canchas de uso múltiple</li>
                <li>32 campos de fútbol</li><li>15 canchas de basquetbol</li>
                <li>4 frontones</li>
                <li>2 canchas de beisbol</li>
                <li>5 ruedos</li>
                <li>3 lienzos charros</li>
            </ul>
            En estos espacios deportivos existen diversos torneos, como la Liga Municipal de Futbol Rápido Parque Zempoala, Parque Téllez, Cancha San Gabriel Azteca y Cancha de Fraccionamientos. 
        </p>
        <p class="card-text justify-text">
            El fomento y la recreación son parte fundamental, y por ello el Municipio de Zempoala cuenta con una variedad de actividades físicas como Zumba, ejercicios de activación, Aerobics, Yoga, rodadas ciclísticas, carreras atléticas, entre otras
        </p>
        <p class="card-text justify-text">
            En el Municipio de Zempoala existen diferentes escuelas de formación de Futbol en las comunidades de San Mateo Tlajomulco, San Gabriel Azteca, Zempoala, Jaguey de Téllez y Fraccionamientos, así como tres escuelas de iniciación en las diciplinas de charrería, beisbol y basquetbol.
        </p>
        <p class="card-text justify-text">
            Hay cinco parques dentro del territorio de Zempoala: Parque La Curva, Parque Zempoala, Parque Linda Vista, Parque Téllez y Amores de Don Juan; establecimientos para nuestros equipos pertenecientes a la cabecera municipal de Zempoala, que incluyen a:
            <ul>
                <li>110 equipos de futbol</li>
                <li>200 equipos de futbol rápido</li>
                <li>30 equipos de basquetbol</li>
                <li>6 equipos de beisbol de categoría libre varonil</li>
                <li>3 equipos femeniles en softbol</li>
            </ul>
        </p>
    </div>
</div>
<br>

<!-- Contacto -->
<div class="container card">
    <form>
        <br>
        <h4 class="card-title text-center">Contáctanos</h4>
        <br>
        <div class="row">
            <!--      Sección de formulario      -->
            <div class=" col-5">
                <div class="row">
                    <div class="mb-3">
                        <label for="InputName" class="form-label">Nombre Completo:</label>
                        <input type="text" class="form-control" id="InputName" aria-describedby="NombreCompleto">
                    </div>
                </div>
                <div class="row">
                    <div class="mb-3">
                        <label for="InputEmail" class="form-label">Correo Electrónico:</label>
                        <input type="email" class="form-control" id="InputEmail" aria-describedby="Email">
                    </div>
                </div>
                <div class="row">
                    <div class="mb-3">
                        <label for="InputPhone" class="form-label">Número Telefónico:</label>
                        <input type="text" class="form-control" id="InputPhone" aria-describedby="NumeroTelefonico">
                    </div>
                </div>
                <div class="row">
                    <div class="mb-3">
                        <label for="InputInfo" class="form-label">Información adicional:</label>
                        <textarea class="form-control" id="InputInfo" rows="3"></textarea>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Enviar</button>
                <br>
                <br>
            </div>
            <div class="col-2"></div>
            <!--      Sección de información      -->
            <div class=" col-5">
                <div class="row"><span><i class="bi bi-house icon"></i>Centro Zempoala, Hgo. C.P. 43838 &copy; 2021</span></div>
                <div class="row"><span><i class="bi bi-phone icon"></i>12 34 56 78 90 Lunes a Viernes de 10:00 A.M. a 18:00 P.M.</span></div>
                <div class="row"><span><i class="bi bi-envelope icon"></i>mail@mail.com</span></div>
            </div>
        </div>
    </form>
</div>

@endsection
