@extends('layout_comude')

@section('title', 'Servicios')

@section('content')
    <div class="container mb-5 fs-4">
        <div class="row">
            <div class="container card align-items-center">
                <img src="{{ asset('images/comude.png') }}" height="115" width="115" alt="comude" >
                <div class="card-body">
                    <h1 class="card-title text-center my-4">Servicios</h1>
                    <p class="card-text justify-text">
                        El Municipio de Zempoala cuenta con una infraestructura deportiva que consiste en la Unidad Deportiva de Zempoala y la Unidad Deportiva San Mateo Tlajomulco. Contamos con distintas canchas para entrenamiento de fútbol, basquetbol y beisbol.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div id="carouselHeaderFade" class="carousel slide container" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselHeaderFade" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselHeaderFade" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselHeaderFade" data-bs-slide-to="2" aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#carouselHeaderFade" data-bs-slide-to="3" aria-label="Slide 4"></button>
            <button type="button" data-bs-target="#carouselHeaderFade" data-bs-slide-to="4" aria-label="Slide 5"></button>
            <button type="button" data-bs-target="#carouselHeaderFade" data-bs-slide-to="5" aria-label="Slide 6"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('images/ban04.jpg') }}" class="d-block w-100" alt="..." height="600">
                <div class="carousel-caption d-none d-md-block">
                    <h2 style='background-color:#000000;'>Fútbol</h2>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('images/banner202.jpg') }}" class="d-block w-100" alt="..." height="600">
                <div class="carousel-caption d-none d-md-block">
                    <h2>Basquetbol</h2>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('images/ban04.jpg') }}" class="d-block w-100" alt="..." height="600">
                <div class="carousel-caption d-none d-md-block">
                    <h2>Béisbol</h2>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('images/ban04.jpg') }}" class="d-block w-100" alt="..." height="600">
                <div class="carousel-caption d-none d-md-block">
                    <h2>Usos múltiples</h2>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('images/ban04.jpg') }}" class="d-block w-100" alt="..." height="600">
                <div class="carousel-caption d-none d-md-block">
                    <h2>Ruedos</h2>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('images/banner202.jpg') }}" class="d-block w-100" alt="..." height="600">
                <div class="carousel-caption d-none d-md-block">
                    <h2>Lienzos charros</h2>
                </div>
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
    <br />

    <div class="container mb-5 fs-4">
        <div class="row">
            <div class="container card align-items-center">
                <img src="{{ asset('images/comude.png') }}" height="115" width="115" alt="comude" >
                <div class="card-body">
                    <h1 class="card-title text-center my-4">Actividades</h1>
                    <div class='row'>
                        <div class='col'>
                            <h2 class='card-title text-center my-4'>Deportes</h2>
                        </div>
                        <div class='col'>
                            <h2 class='card-title text-center my-4'>Parques</h2>
                        </div>
                    </div>
                    <div class='row'>
                        <div class='col'>
                            <img src="{{ asset('images/banner202.jpg') }}" class="d-block w-100" alt="...">
                        </div>
                        <div class='col'>
                            <img src="{{ asset('images/banner202.jpg') }}" class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <div class='row'>
                        <div class='col'>
                            <ul>
                                <li class="fw-bold">Zumba</li>
                                <li>Activación física</li>
                                <li>Aerobics y Yoga</li>
                                <li>Atletismo</li>
                                <li>Entre otros</li>
                            </ul>
                        </div>
                        <div class='col'>
                            <ul>
                                <li>La Curva</li>
                                <li>Zempoala</li>
                                <li>Linda Vista</li>
                                <li>Téllez</li>
                                <li class='fw-bold'>Amores de Don Juan</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="container mb-5 fs-4">
        <div class="row">
            <div class="container card align-items-center">
                <img src="{{ asset('images/comude.png') }}" height="115" width="115" alt="comude" >
                <div class="card-body">
                    <h1 class="card-title text-center my-4">Escuelas</h1>
                    <div class='row'>
                        <div class="col-sm align-items-center mx-3">
                            <div class="row">
                                <p class="card-text justify-text">
                                    En el Municipio de Zempoala existen diferentes escuelas de formación de fútbol en distintas comunidades:<br />
                                </p>
                            </div>
                            <div class='row mx-5'>
                                <ul>
                                    <li>San Mateo Tlajomulco</li>
                                    <li>San Gabriel Azteca</li> 
                                    <li>Zempoala</li>
                                    <li>Jaguey de Téllez</li>
                                    <li>Fraccionamientos</li>
                                </ul>
                            </div>
                            <div class='row'>
                                <p class="card-text justify-text">
                                    Contamos también tres escuelas de iniciación en las diciplinas de charrería, beisbol y basquetbol.
                                </p>
                            </div>
                        </div>
                        <div class='col-sm mx-3'>
                            <img src="{{ asset('images/banner202.jpg') }}" class="d-block w-100" alt="...">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="container mb-5 fs-4 text-center">
        <ul class='list-group list-group-horizontal'>
            <li class='list-group-item flex-fill'>110 equipos de futbol</li>
            <li class='list-group-item flex-fill'>200 equipos de futbol rápido</li>
        </ul>
        <ul class='list-group list-group-horizontal'>
            <li class='list-group-item flex-fill'>30 equipos de basquetbol</li>
            <li class='list-group-item flex-fill'>6 equipos de beisbol de categoría libre varonil</li>
            <li class='list-group-item flex-fill'>3 equipos femeniles en softbol</li>
        </ul>
    </div>

@endsection