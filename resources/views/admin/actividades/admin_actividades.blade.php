@extends('admin.layout_comude_admin')

@section('title', 'Actividades Admin')

@section('content')
    @include('admin.menu_admin')

    <h1 class="text-center"> Administrador de actividades </h1>

    <div class="container mt-5">
        <div class="row">
            <div class="col-11">
            </div>
            <div class="col-1">
                <a href="" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                    <h2>
                        <i class="bi bi-plus-circle-fill"></i>
                    </h2>
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
                                        <input type="text" class="form-control" id="inscripcion" name="inscripcion"
                                               aria-describedby="inscripcionHelp">
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
                                        <label for="horario_id" class="form-label">Horario</label>
                                        <select name="horario_id" id="horario_id" class="form-select">
                                            <option value="">Seleccione un horario</option>
                                            @foreach($horarios as $horario)
                                                <option value="{{ $horario->id }}">{{ $horario->dia }} - Hora de inicio: {{ \Carbon\Carbon::parse($horario->hora_inicio)->format('h:i A') }} - Hora de término: {{ \Carbon\Carbon::parse($horario->hora_fin)->format('h:i A') }}</option>
                                            @endforeach
                                        </select>
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
        <table class="table table-hover mt-2 text-center">
            <thead>
            <tr>
                <th>Nombre</th>
                <th>Inscripción</th>
                <th>Costo</th>
                <th>Escuela</th>
                <th>Requisitos</th>
                <th>Profesor</th>
                <th>Horario </th>
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
                    @if(!isset($actividad->horario))
                        <td>No hay horario</td>
                    @else
                        <td>{{$actividad->horario}}</td>
                    @endif
                    <td>
                        <a href="" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editModal{{$escuela->id}}">
                            <i class="bi bi-pencil"></i>
                        </a>
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
                            <button type="submit" class="btn btn-danger"><i class="bi bi-trash"></i></button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection

