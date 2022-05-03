<x-app-layout>
    <x-slot name="header">
        <div class="row">
            <div class="col-11">
            <span class="h4 font-weight-bold">
                {{ __('Administrador de escuelas') }}
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
                            <form method="POST" action="{{ route('escuelas.store') }}">
                                @csrf
                                <div class="modal-header">
                                    <h5 class="modal-title" id="staticBackdropLabel">Agregar escuela</h5>
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
                                        <label for="ubicacion" class="form-label">Ubicación</label>
                                        <input type="text" class="form-control" id="ubicacion" name="ubicacion"
                                               aria-describedby="ubicacionHelp">
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
        <div class="card">
            <div class="container">
                <table class="card-body table table-hover mt-2 text-center">
                    <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Dirección</th>
                        <th>Editar</th>
                        <th>Eliminar</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($escuelas as $escuela)
                        <tr>
                            <td>{{$escuela->nombre}}</td>
                            <td>{{$escuela->ubicacion}}</td>
                            <td>

                                <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#editModal{{$escuela->id}}">
                                    Editar
                                </button>
                                <!-- Modal editar -->
                                <div class="modal fade " id="editModal{{$escuela->id}}" data-bs-backdrop="static" data-bs-keyboard="false"
                                     tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                                        <div class="modal-content">
                                            <form method="POST" action="{{ route('escuelas.update', [$escuela->id]) }}">
                                                @csrf
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="staticBackdropLabel">Editar escuela</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Cancelar"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="mb-3">
                                                        <label for="nombre" class="form-label">Nombre</label>
                                                        <input type="text" class="form-control" id="nombre" name="nombre"
                                                               aria-describedby="nombreHelp" value="{{ $escuela->nombre }}">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="ubicacion" class="form-label">Ubicación</label>
                                                        <input type="text" class="form-control" id="ubicacion" name="ubicacion"
                                                               aria-describedby="ubicacionHelp" value="{{ $escuela->ubicacion }}">
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
                                <form action="{{ route('escuelas.destroy', [$escuela->id]) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger text-white">Eliminar
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
