@extends('layout_comude')

@section('title', 'Sobre nosotros')

@section('content')

<div class="container card fs-4">
    <div class="row card-body text-center">
        <div class="w-100">
            <img class="w-100" src="{{ asset('images/banner202.jpg') }}" alt="comude" >
            <img src="{{ asset('images/comude.png') }}" height="115" width="115" alt="comude" >
        </div>
    </div>
    <div class="row card-body">
        <div class="col-sm">
            <div class="card-body">
                <h1 class="card-title text-center my-4">Misión</h1>
                <p class="card-text justify-text">
                    La Dirección Municipal del Deporte tiene a bien estimular, promover y apoyar, la enseñanza del deporte para todos los habitantes del municipio, en espacios deportivos y recreativos con una infraestructura adecuada y de calidad, con personal calificado y atendiendo las necesidades de la población.
                </p>
            </div>
        </div>
        <div class="col-sm">
            <div class="card-body">
                <h1 class="card-title text-center my-4">Visión</h1>
                <p class="card-text justify-text">
                    La Dirección Municipal del Deporte pretende ser un organismo líder en el deporte mediante la generación de proyectos creativos e innovadores que beneficien y activen a toda la población del municipio de Zempoala, construyendo por medio del fomento deportivo la participación ciudadana y el tejido social, mismo que elevara su calidad de vida de diversos sectores poblacionales.
                </p>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm text-center">
            <img class="rounded mx-auto d-block" src="{{ asset('images/juventud.png') }}" class="img-fluid" alt="Misión" />
        </div>
        <div class="col-sm text-center">
            <img src="{{ asset('images/instancia01.png') }}" alt="Visión" />
        </div>
    </div>
</div>
<br />

<div class="container card align-items-center">
    <div class="card-body text-center">
        <div class="w-100">
            <img src="{{ asset('images/comude.png') }}" height="115" width="115" alt="comude" >
        </div>
        <div class="w-100">
            <h1 class="card-title text-center">Valores</h1>
        </div>
    </div>
    
    <div class="d-flex row card-body w-100 align-items-center fs-4" height="5000" style="background-image:url({{ asset('images/female-stafrket.jpg') }});">
        <div class="col-sm w-25 m-2">
            <ol class='list-group list-group-flush align-middle'>
                <li class='list-group-item d-flex justify-content-end'>Institucionalidad</li>
                <li class='list-group-item d-flex justify-content-end'>Compromiso</li>
                <li class='list-group-item d-flex justify-content-end'>Responsabilidad</li>
                <li class='list-group-item d-flex justify-content-end'>Respeto</li>   
                <li class='list-group-item d-flex justify-content-end'>Trabajo en equipo</li>
                <li class='list-group-item d-flex justify-content-end'>Inclusión</li>
            </ol>
        </div>
        <div class="col-sm w-75 m-2">
            <ol class='list-group list-group-flush align-middle'>
                <li class='list-group-item d-flex justify-content-begin'>Lealtad</li>
                <li class='list-group-item d-flex justify-content-begin'>Honestidad</li>
                <li class='list-group-item d-flex justify-content-begin'>Eficacia</li>
                <li class='list-group-item d-flex justify-content-begin'>Amistad</li>   
                <li class='list-group-item d-flex justify-content-begin'>Apoyo</li>
                <li class='list-group-item d-flex justify-content-begin'>Unión</li>
            </ol>
        </div>
    </div>
</div>
<br />

<div class="container card align-items-center">
    <div class="card-body text-center">
        <div class="w-100">
            <img src="{{ asset('images/comude.png') }}" height="115" width="115" alt="comude" >
        </div>
        <div class="w-100">
            <h1 class="card-title text-center">Organigrama</h1>
        </div>
    </div>

    <div class='row h-50'>
        <div class="card-body">
            <!--<img class='img-fluid' src="{{ asset('images/ORGANIgrama.png') }}" alt="comude" >  -->
        </div>
    </div>
</div>
<br />

<div class="container card align-items-center fs-4">
    <div class="card-body text-center">
        <div class="w-100">
            <img src="{{ asset('images/comude.png') }}" height="115" width="115" alt="comude" >
        </div>
        <div class="w-100">
            <h1 class="card-title text-center my-4">Objetivos</h1>
        </div>
    </div>

    <div class='row'>
        <div class="card-body">
            <p class="card-text justify-text">
                Incentivar la práctica del deporte, recreación y actividad física mediante la formulación, ejecución y accesibilidad de programas deportivos, incluyentes y eventos recreativos para todos los sectores de la población, aunados de acciones de mantenimiento y rehabilitación de espacios deportivos con criterios de equidad, transparencia, competitividad e inclusión social logrando convertir el uso del tiempo libre en un hábito saludable para obtener calidad de vida.
            </p>
        </div>
    </div>

    <div class='container'>
        <h1 class="card-title text-center my-4">Objetivos específicos</h1>
        <div class='row align-items-center'>
            <div class='col'>
                <div class="card-body">
                    <p class="card-text justify-text">
                        <ol>
                            <li>Elaborar el Plan Municipal del deporte en coordinación con el área de turismo.</li>
                            <li>Conocer el Municipio a través de la realización de eventos deportivos en diferentes lugares de atractivos turísticos.</li>
                            <li>Ser un organismo innovador destacado a nivel Municipal Y Estatal tanto en eventos deportivos como recreativos.</li>
                            <li>Gestionar los recursos necesarios para la habilitación, rehabilitación y mantenimiento de espacios deportivos que satisfagan las necesidades de los habitantes.</li>
                            <li>Dar constante mantenimiento a los espacios deportivos y recreativos que son parte de la administración de COMUDE.</li>
                            <li>Acercar a la comunidad a nuestros espacios con la creación de programas deportivos de diversas disciplinas, así como actividades recreativas, torneos, ligas, escolares y actividades incluyentes.</li>
                            <li>Atraer eventos deportivos que den proyección a Zempoala en los ámbitos culturales y turísticos.</li>
                            <li>Realizar proyectos encaminados a personas de la tercera edad, así como aquellas con capacidades diferentes donde en coordinación con el espacio de rehabilitación física se planeen actividades donde exista la participación de este sector poblacional.</li>
                        </ol>
                    </p>
                </div>
            </div>
            <div class='col align-items-center'>
                <div class='row my-3'>
                    <img class='w-100' src="{{ asset('images/inf_05.jpg') }}" alt="Objetivos" >
                </div>                
                <div class='row my-3'>
                    <img class='w-100' src="{{ asset('images/inf_05.jpg') }}" alt="Objetivos" >
                </div>                
            </div>
        </div>
    </div>
</div>
<br />


@endsection
