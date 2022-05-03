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
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                            <a href="#" class="btn btn-success">Agregar foto</a>
                            <a href="#" class="btn btn-danger text-white">Eliminar foto</a>
                        </div>
                        <div class="card-footer text-muted">
                            ...
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
