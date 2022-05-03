<x-app-layout>
    <x-slot name="header">
        <div class="row">
            <div class="col-11">
            <span class="h4 font-weight-bold">
                {{ __('Administrador de actividades') }}
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
                            <form method="POST" action="{{ route('actividades.store') }}">
                                @csrf
                                <div class="modal-header">
                                    <h5 class="modal-title" id="staticBackdropLabel">Agregar actividad</h5>
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
                                        <label for="inscripcion" class="form-label">Inscripción</label>
                                        <div class="input-group">
                                            <span class="input-group-text">$</span>
                                            <input type="text" class="form-control" id="inscripcion" name="inscripcion"
                                                   aria-describedby="inscripcionHelp">
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="costo" class="form-label">Costo</label>
                                        <div class="input-group">
                                            <span class="input-group-text">$</span>
                                            <input type="number" class="form-control" id="costo" name="costo"
                                                   aria-describedby="costoHelp">
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="escuela_id" class="form-label">Escuela</label>
                                        <select name="escuela_id" id="escuela_id" class="form-select">
                                            <option value="">Seleccione una escuela</option>
                                            @foreach($escuelas as $escuela)
                                                <option value="{{ $escuela->id }}">{{ $escuela->nombre }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="requisitos" class="form-label">Requisitos</label>
                                        <textarea name="requisitos" id="requisitos" class="form-control"></textarea>
                                    </div>
                                    <div class="mb-3">
                                        <label for="profesor_id" class="form-label">Profesor</label>
                                        <select name="profesor_id" id="profesor_id" class="form-select">
                                            <option value="">Seleccione un profesor</option>
                                            @foreach($profesores as $profesor)
                                                <option value="{{ $profesor->id }}">{{ $profesor->nombre }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="dias" class="form-label">Días</label>
                                        <select name="dias" id="dias" class="form-select" multiple>
                                            <option value="Lunes">Lunes</option>
                                            <option value="Martes">Martes</option>
                                            <option value="Miercoles">Miércoles</option>
                                            <option value="Jueves">Jueves</option>
                                            <option value="Viernes">Viernes</option>
                                            <option value="Sabado">Sábado</option>
                                            <option value="Domingo">Domingo</option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="hora_inicio" class="form-label">Hora de inicio</label>
                                        <input type="time" class="form-control" id="hora_inicio" name="hora_inicio"
                                               aria-describedby="hora_inicioHelp">
                                    </div>
                                    <div class="mb-3">
                                        <label for="hora_fin" class="form-label">Hora de fin</label>
                                        <input type="time" class="form-control" id="hora_fin" name="hora_fin"
                                               aria-describedby="hora_finHelp">
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
                    <th>Inscripción</th>
                    <th>Costo</th>
                    <th>Escuela</th>
                    <th>Requisitos</th>
                    <th>Profesor</th>
                    <th>Días</th>
                    <th>Hora inicio</th>
                    <th>Hora fin</th>
                    <th>Editar</th>
                    <th>Eliminar</th>
                </tr>
                </thead>
                <tbody>
                @foreach($actividades as $actividad)
                    <tr>
                        <td>{{$actividad->nombre}}</td>
                        <td>{{$actividad->inscripcion}}</td>
                        <td>{{$actividad->costo}}</td>
                        @if(!isset($actividad->escuela))
                            <td>No hay escuelas asignadas</td>
                        @else
                            <td>{{$actividad->escuela}}</td>
                        @endif
                        <td>{{$actividad->requisitos}}</td>
                        @if(!isset($actividad->profesores))
                            <td>No hay profesores</td>
                        @else
                            <td>{{$actividad->profesores}}</td>
                        @endif
                        <td>{{$actividad->dias}}</td>
                        <td>{{$actividad->hora_inicio}}</td>
                        <td>{{$actividad->hora_fin}}</td>
                        <td>
                            <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#editModal{{$escuela->id}}">
                                Editar
                            </button>
                            <!-- Modal editar -->
                            <div class="modal fade " id="editModal{{$actividad->id}}" data-bs-backdrop="static" data-bs-keyboard="false"
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
                                <button type="submit" class="btn btn-danger">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>
