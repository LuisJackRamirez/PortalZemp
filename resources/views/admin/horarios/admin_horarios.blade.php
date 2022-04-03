@extends('admin.layout_comude_admin')

@section('title', 'Escuelas Admin')

@section('content')
    @include('admin.menu_admin')

    <h1 class="text-center"> Administrador de horarios </h1>

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
                            <form method="POST" action="{{ route('horarios.store') }}">
                                @csrf
                                <div class="modal-header">
                                    <h5 class="modal-title" id="staticBackdropLabel">Agregar horario</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Cancelar"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="mb-3">
                                        <label for="dia" class="form-label">Día</label>
                                        <select class="form-select" aria-label="Dia de seleccion" name="dia" id="dia">
                                            <option value="lunes">Lunes</option>
                                            <option value="martes">Martes</option>
                                            <option value="miercoles">Miércoles</option>
                                            <option value="jueves">Jueves</option>
                                            <option value="viernes">Viernes</option>
                                            <option value="sabado">Sábado</option>
                                            <option value="domingo">Domingo</option>
                                        </select>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="mb-3">
                                                <label for="hora_inicio" class="form-label">Hora de inicio</label>
                                                <input type="time" class="form-control" id="hora_inicio" name="hora_inicio"
                                                       aria-describedby="hora_inicio">
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="mb-3">
                                                <label for="hora_fin" class="form-label">Hora de término</label>
                                                <input type="time" class="form-control" id="hora_fin" name="hora_fin"
                                                       aria-describedby="hora_fin">
                                            </div>
                                        </div>
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
                <th>Día</th>
                <th>Hora de inicio</th>
                <th>Hora de término</th>
                <th>Editar</th>
                <th>Eliminar</th>
            </tr>
            </thead>
            <tbody>
            @foreach($horarios as $horario)
                <tr>
                    <td>{{$horario->dia}}</td>
                    <td>{{ \Carbon\Carbon::parse($horario->hora_inicio)->format('h:i A') }}</td>
                    <td>{{ \Carbon\Carbon::parse($horario->hora_fin)->format('h:i A') }}</td>
                    <td>
                        <a href="" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editModal{{$horario->id}}">
                            <i class="bi bi-pencil"></i>
                        </a>
                        <!-- Modal editar -->
                        <div class="modal fade " id="editModal{{$horario->id}}" data-bs-backdrop="static" data-bs-keyboard="false"
                             tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                                <div class="modal-content">
                                    <form method="POST" action="{{ route('horarios.update', [$horario->id]) }}">
                                        @csrf
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="staticBackdropLabel">Agregar horario</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Cancelar"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="mb-3">
                                                <label for="dia" class="form-label">Día</label>
                                                <select class="form-select" aria-label="Dia de seleccion" name="dia" id="dia">
                                                    <option value="lunes">Lunes</option>
                                                    <option value="martes">Martes</option>
                                                    <option value="miercoles">Miércoles</option>
                                                    <option value="jueves">Jueves</option>
                                                    <option value="viernes">Viernes</option>
                                                    <option value="sabado">Sábado</option>
                                                    <option value="domingo">Domingo</option>
                                                </select>
                                            </div>
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="mb-3">
                                                        <label for="hora_inicio" class="form-label">Hora de inicio</label>
                                                        <input type="time" class="form-control" id="hora_inicio" name="hora_inicio"
                                                               aria-describedby="hora_inicio" value="{{$horario->hora_inicio}}">
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="mb-3">
                                                        <label for="hora_fin" class="form-label">Hora de término</label>
                                                        <input type="time" class="form-control" id="hora_fin" name="hora_fin"
                                                               aria-describedby="hora_fin" value="{{$horario->hora_fin}}">
                                                    </div>
                                                </div>
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
                        <form action="{{ route('horarios.destroy', [$horario->id]) }}" method="POST">
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
