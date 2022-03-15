@extends('layout_comude')

@section('title', 'Comude Zempoala')

@section('content')

<div class="container card align-items-center">
    <img src="{{ asset('images/comude.png') }}" height="115" width="115" alt="comude" >
    <div class="card-body">
        <h4 class="card-title text-center">Misión</h4>
        <p class="card-text justify-text">
            La Dirección Municipal del Deporte tiene a bien estimular, promover y apoyar, la enseñanza del deporte para todos los habitantes del municipio, en espacios deportivos y recreativos con una infraestructura adecuada y de calidad, con personal calificado y atendiendo las necesidades de la población.
        </p>
        <h4 class="card-title text-center">Visión</h4>
        <p class="card-text justify-text">
            La Dirección Municipal del Deporte pretende ser un organismo líder en el deporte mediante la generación de proyectos creativos e innovadores que beneficien y activen a toda la población del municipio de Zempoala, construyendo por medio del fomento deportivo la participación ciudadana y el tejido social, mismo que elevara su calidad de vida de diversos sectores poblacionales. 
        </p>
    </div>
</div>
<br />

<div class="container card align-items-center">
    <img src="{{ asset('images/comude.png') }}" height="115" width="115" alt="comude" >
    <div class="card-body">
        <h4 class="card-title text-center">Valores</h4>
        <table>
            <tr>
                <td style="border:1px solid black;">1</td>
                <td style="border:1px solid black;">text</td>
                <td style="border:1px solid black;">10</td>
                <td style="border:1px solid black;">text</td>
            </tr>
            <tr>
                <td style="border:1px solid black;">2</td>
                <td style="border:1px solid black;">text</td>
                <td style="border:1px solid black;">11</td>
                <td style="border:1px solid black;">text</td>
            </tr>
        </table>
    </div>
</div>
<br />

<div class="container card align-items-center">
    <img src="{{ asset('images/comude.png') }}" height="115" width="115" alt="comude" >
    <div class="card-body">
        <h4 class="card-title text-center">Objetivo</h4>
        <p class="card-text justify-text">
            Incentivar la práctica del deporte, recreación y actividad física mediante la formulación, ejecución y accesibilidad de programas deportivos, incluyentes y eventos recreativos para todos los sectores de la población, aunados de acciones de mantenimiento y rehabilitación de espacios deportivos con criterios de equidad, transparencia, competitividad e inclusión social logrando convertir el uso del tiempo libre en un hábito saludable para obtener calidad de vida.
        </p>
    </div>
    <div class="card-body">
        <h4 class="card-title text-center">Objetivos específicos</h4>
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
<br />


@endsection