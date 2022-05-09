<x-app-layout>
    <x-slot name="header">
        <h2 class="h4 font-weight-bold">
            {{ __('Panel de administración') }}
        </h2>
    </x-slot>

    <div class="card my-4">
        <div class="card-body">
            <div class="row mt-4">
                <div class="col-6 mt-2">
                    <div class="card text-center border">
                        <div class="card-body">
                            <h5 class="card-title">Escuelas dadas de alta</h5>
                            <h1 class="card-text">
                                {{ $numero_escuelas_registradas }}
                            </h1>
                            <button onclick="location.href = '{{route('escuelas')}}'" class="btn btn-primary text-white">Ver más</button>
                        </div>
                        <div class="card-footer text-muted">
                            ...
                        </div>
                    </div>
                </div>
                <div class="col-6 mt-2">
                    <div class="card text-center border">
                        <div class="card-body">
                            <h5 class="card-title">Profesores dados de alta</h5>
                            <h1 class="card-text">
                                {{ $numero_profesores_registrados }}
                            </h1>
                            <button onclick="location.href = '{{route('profesores')}}'" class="btn btn-primary text-white">Ver más</button>
                        </div>
                        <div class="card-footer text-muted">
                            ...
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-6">
                    <div class="card text-center border">
                        <div class="card-body">
                            <h5 class="card-title">Actividades dadas de alta</h5>
                            <h1 class="card-text">{{ $numero_actividades_registradas }}</h1>
                            <button onclick="location.href = '{{route('actividades')}}'" class="btn btn-primary text-white">Ver más</button>
                        </div>
                        <div class="card-footer text-muted">

                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="card text-center border">
                        <div class="card-body">
                            <h5 class="card-title">Personas que han enviado correo</h5>
                            <h1 class="card-text">{{ $numero_personas_registradas }}</h1>
                            <a href="#" class="btn btn-primary text-white">Ver más</a>
                        </div>
                        <div class="card-footer text-muted">
                            ...
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-12">
                    <div class="card text-center border">
                        <div class="card-header">
                            Imágenes del carrusel
                        </div>
                        <div class="card-body">
                            <form action="{{ url('image-carrousel') }}" class="form-image-upload" method="POST" enctype="multipart/form-data">


                                {!! csrf_field() !!}


                                @if (count($errors) > 0)
                                    <div class="alert alert-danger">
                                        <strong>Whoops!</strong> Hubieron algunos problemas con tu entrada.<br><br>
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif


                                @if ($message = Session::get('success'))
                                    <div class="alert alert-success alert-block">
                                        <strong>{{ $message }}</strong>
                                    </div>
                                @endif


                                <div class="row">
                                    <div class="col-md-5">
                                        <strong>Nombre:</strong>
                                        <input type="text" name="nombre" class="form-control" placeholder="Nombre">
                                    </div>
                                    <div class="col-md-5">
                                        <strong>Imagen:</strong>
                                        <input type="file" name="imagen" class="form-control">
                                    </div>
                                    <div class="col-md-2">
                                        <br/>
                                        <button type="submit" class="btn btn-success">Subir</button>
                                    </div>
                                </div>


                            </form>


                            <div class="row">
                                <div class='list-group gallery'>


                                    @if($images->count())
                                        <div class="row">
                                            @foreach($images as $image)
                                                <div class='col-4 col-xl-4 col-lg-4 col-md-4 col-sm-4'>
                                                    <a class="thumbnail fancybox" rel="ligthbox" href="/images/{{ $image->imagen }}">
                                                        <img class="img-responsive" alt="" src="/images/{{ $image->imagen }}" />
                                                        <div class='text-center'>
                                                            <small class='text-muted'>{{ $image->nombre }}</small>
                                                        </div> <!-- text-center / end -->
                                                    </a>
                                                    <form action="{{ url('image-carrousel',$image->id) }}" method="POST">
                                                        <input type="hidden" name="_method" value="delete">
                                                        {!! csrf_field() !!}
                                                        <button type="submit" class="close-icon btn btn-danger text-white">X</button>
                                                    </form>
                                                </div> <!-- col-6 / end -->
                                            @endforeach
                                        </div>
                                    @endif


                                </div> <!-- list-group / end -->
                            </div> <!-- row / end -->
                        </div>
                        <div class="card-footer text-muted">
                            ...
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        $(document).ready(function(){
            $(".fancybox").fancybox({
                openEffect: "none",
                closeEffect: "none"
            });
        });
    </script>
</x-app-layout>
