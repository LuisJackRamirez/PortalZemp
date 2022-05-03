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

<div class="container mb-5">
    <div class="row">
        <div class="col-5 mt-3">
            <iframe src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Fpresidenciamunicipaldezempoala%2Fposts%2F368657448639506&show_text=true&width=500" style=" width: 100%; height: 610px; border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
        </div>
        <div class="col-4">
            <blockquote class="twitter-tweet" data-lang="es" data-theme="light"><p lang="es" dir="ltr">Sábado <a href="https://twitter.com/hashtag/RockShow?src=hash&amp;ref_src=twsrc%5Etfw">#RockShow</a><a href="https://twitter.com/ZempoalaOficial?ref_src=twsrc%5Etfw">@ZempoalaOficial</a> &quot;Él No Te Sabe Amar&quot;<br>855am <a href="https://twitter.com/exafm955torreon?ref_src=twsrc%5Etfw">@exafm955torreon</a><br>RT <a href="https://twitter.com/leopoldetorres?ref_src=twsrc%5Etfw">@leopoldetorres</a> <a href="https://twitter.com/COHENmx?ref_src=twsrc%5Etfw">@COHENmx</a> <a href="https://twitter.com/fperalesv?ref_src=twsrc%5Etfw">@fperalesv</a> <a href="https://t.co/HLLyuzykCM">pic.twitter.com/HLLyuzykCM</a></p>&mdash; Héctor Becerra (@hectorexafm) <a href="https://twitter.com/hectorexafm/status/718775923080736768?ref_src=twsrc%5Etfw">9 de abril de 2016</a></blockquote> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
        </div>
    </div>
</div>

@endsection
