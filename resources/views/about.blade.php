@extends('layout_comude')

@section('title', 'Sobre nosotros')

@section('content')

<div class="container card">
    <div class="row card-body text-center">
        <div class="w-100">
            <img class="w-100" src="{{ asset('images/banner202.jpg') }}" alt="comude" >
            <img src="{{ asset('images/comude.png') }}" height="115" width="115" alt="comude" >
        </div>
    </div>
    <div class="row card-body">
        <div class="col-sm">
            <div class="card-body">
                <h4 class="card-title text-center">Misión</h4>
                <p class="card-text justify-text">
                    La Dirección Municipal del Deporte tiene a bien estimular, promover y apoyar, la enseñanza del deporte para todos los habitantes del municipio, en espacios deportivos y recreativos con una infraestructura adecuada y de calidad, con personal calificado y atendiendo las necesidades de la población.
                </p>
            </div>
        </div>
        <div class="col-sm">
            <div class="card-body">
                <h4 class="card-title text-center">Visión</h4>
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
            <h4 class="card-title text-center">Valores</h4>
        </div>
    </div>
    
    <div class="d-flex row card-body w-100 align-items-center">
        <div class="col-sm w-25">
            <ol class='list-group list-group-flush align-middle'>
                <li class='list-group-item d-flex justify-content-end fs-5'>Institucionalidad</li>
                <li class='list-group-item d-flex justify-content-end fs-5'>Compromiso</li>
                <li class='list-group-item d-flex justify-content-end fs-5'>Responsabilidad</li>
                <li class='list-group-item d-flex justify-content-end fs-5'>Respeto</li>   
                <li class='list-group-item d-flex justify-content-end fs-5'>Trabajo en equipo</li>
                <li class='list-group-item d-flex justify-content-end fs-5'>Inclusión</li>
            </ol>
        </div>
        <div class="col-sm w-75">
            <img class='w-100' src="{{ asset('images/female-stafrket.jpg') }}" alt="comude" >
        </div>
    </div>

    <div class="d-flex row card-body w-100 align-items-center">
        <div class="col-sm w-75">
            <img class='w-100' src="{{ asset('images/escr01374x280.png') }}" alt="comude" >
        </div>
        <div class="col-sm w-25">
            <ol class='list-group list-group-flush align-middle'>
                <li class='list-group-item d-flex justify-content-begin fs-5'>Lealtad</li>
                <li class='list-group-item d-flex justify-content-begin fs-5'>Honestidad</li>
                <li class='list-group-item d-flex justify-content-begin fs-5'>Eficacia</li>
                <li class='list-group-item d-flex justify-content-begin fs-5'>Amistad</li>   
                <li class='list-group-item d-flex justify-content-begin fs-5'>Apoyo</li>
                <li class='list-group-item d-flex justify-content-begin fs-5'>Unión</li>
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
            <h4 class="card-title text-center">Organigrama</h4>
        </div>
    </div>

    <div class='row h-50'>
        <div class="card-body">
            <img class='img-fluid' src="{{ asset('images/ORGANIgrama.png') }}" alt="comude" >  
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
            <h4 class="card-title text-center">Objetivos</h4>
        </div>
    </div>

    <div class='row'>
        <div class="card-body">
            <p class="card-text justify-text mx-5 mb-3">
                Incentivar la práctica del deporte, recreación y actividad física mediante la formulación, ejecución y accesibilidad de programas deportivos, incluyentes y eventos recreativos para todos los sectores de la población, aunados de acciones de mantenimiento y rehabilitación de espacios deportivos con criterios de equidad, transparencia, competitividad e inclusión social logrando convertir el uso del tiempo libre en un hábito saludable para obtener calidad de vida.
            </p>
        </div>
    </div>

    <div class='container'>
        <h4 class="card-title text-center">Objetivos específicos</h4>
        <div class='row'>
            <div class='col w-40'>
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

            <div class='col w-60'>
                <img class='w-100' src="{{ asset('images/inf_05.jpg') }}" alt="Objetivos" >
            </div>
        </div>
    </div>
</div>
<br />


@endsection
