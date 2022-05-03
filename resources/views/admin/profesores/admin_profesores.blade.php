<x-app-layout>
    <x-slot name="header">
        <div class="row">
            <div class="col-11">
            <span class="h4 font-weight-bold">
                {{ __('Administrador de profesores') }}
            </span>
            </div>
            <div class="col-1">
                <a href="" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                    <x-zondicon-add-solid class="w-5 h-5" />
                </a>
                <!-- Modal agregar -->
                <div class="modal fade " id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false"
                     tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                        <div class="modal-content">
                            <form method="POST" action="{{ route('profesores.store') }}">
                                @csrf
                                <div class="modal-header">
                                    <h5 class="modal-title" id="staticBackdropLabel">Agregar profesor</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Cancelar"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="mb-3">
                                        <label for="nombre" class="form-label">Nombre</label>
                                        <input type="text" class="form-control" id="nombre" name="nombre"
                                               aria-describedby="nombreHelp">
                                    </div>
                                    <div class="mb-3">
                                        <label for="telefono" class="form-label">Teléfono</label>
                                        <input type="text" class="form-control" id="telefono" name="telefono"
                                               aria-describedby="telefonoHelp">
                                    </div>
                                    <div class="mb-3">
                                        <label for="email" class="form-label">Correo electrónico</label>
                                        <input type="email" class="form-control" id="email" name="email"
                                               aria-describedby="emailHelp">
                                    </div>
                                    <div class="mb-3">
                                        <label for="informacion_adicional" class="form-label">Información adicional</label>
                                        <textarea name="informacion_adicional" id="informacion_adicional" class="form-control"></textarea>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar
                                    </button>
                                    <button type="submit" class="btn btn-success">Agregar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </x-slot>

    <div class="container mt-5">
        <div class="card container">
            <table class="card-body table table-hover mt-2 text-center">
                <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Teléfono</th>
                    <th>Correo electrónico</th>
                    <th>Información adicional</th>
                    <th>Editar</th>
                    <th>Eliminar</th>
                </tr>
                </thead>
                <tbody>
                @foreach($profesores as $profesor)
                    <tr>
                        <td>{{$profesor->nombre}}</td>
                        <td>{{$profesor->telefono}}</td>
                        <td>{{$profesor->email}}</td>
                        <td>{{$profesor->informacion_adicional}}</td>
                        <td>
                            <button type="button" class="btn btn-success " data-bs-toggle="modal" data-bs-target="#editModal{{$profesor->id}}">
                                Editar
                            </button>
                            <!-- Modal editar -->
                            <div class="modal fade " id="editModal{{$profesor->id}}" data-bs-backdrop="static" data-bs-keyboard="false"
                                 tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                                    <div class="modal-content">
                                        <form method="POST" action="{{ route('profesores.update', [$profesor->id]) }}">
                                            @csrf
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="staticBackdropLabel">Agregar profesor</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Cancelar"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="mb-3">
                                                    <label for="nombre" class="form-label">Nombre</label>
                                                    <input type="text" class="form-control" id="nombre" name="nombre" value="{{ $profesor->nombre }}"
                                                           aria-describedby="nombreHelp">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="telefono" class="form-label">Teléfono</label>
                                                    <input type="text" class="form-control" id="telefono" name="telefono" value="{{ $profesor->telefono }}"
                                                           aria-describedby="telefonoHelp">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="email" class="form-label">Correo electrónico</label>
                                                    <input type="email" class="form-control" id="email" name="email"
                                                           value="{{ $profesor->email }}"
                                                           aria-describedby="emailHelp">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="informacion_adicional" class="form-label">Información adicional</label>
                                                    <textarea name="informacion_adicional" id="informacion_adicional" class="form-control">{{ $profesor->informacion_adicional }}</textarea>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar
                                                </button>
                                                <button type="submit" class="btn btn-success">Editar</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td>
                            <form action="{{ route('profesores.destroy', [$profesor->id]) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger text-white">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

</x-app-layout>
