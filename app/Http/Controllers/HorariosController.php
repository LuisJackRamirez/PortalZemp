<?php

namespace App\Http\Controllers;

use App\Models\Horario;
use Illuminate\Http\Request;

class HorariosController extends Controller
{
    /**
     * index para mostrar todos los horarios
     * store para guardar un nuevo horario
     * update para actualizar un horario
     * destroy para eliminar un horario
     * show para mostrar un horario
     * edit para mostrar el formulario de edición de un horario
     */

    public function store(Request $request) {

        $request->validate(
            [
                'dia' => 'required | string',
                'hora_inicio' => 'required | date_format:H:i',
                'hora_fin' => 'required | date_format:H:i | after:hora_inicio',
                'actividad_id' => 'required | integer | exists:actividades,id',
                'escuela_id' => 'required | integer | exists:escuelas,id',
            ]
        );

        $horario = new Horario();
        $horario->dia = $request->dia;
        $horario->hora_inicio = $request->hora_inicio;
        $horario->hora_fin = $request->hora_fin;
        $horario->actividad_id = $request->actividad_id;
        $horario->escuela_id = $request->escuela_id;
        $horario->save();

        return redirect()->route('horarios.index')->with('success', 'Horario creado correctamente');
    }

    public function update(Request $request, $id){

        $request->validate(
            [
                'dia' => 'required | string',
                'hora_inicio' => 'required | date_format:H:i',
                'hora_fin' => 'required | date_format:H:i | after:hora_inicio',
                'actividad_id' => 'required | integer | exists:actividades,id',
                'escuela_id' => 'required | integer | exists:escuelas,id',
            ]
        );

        $horario = Horario::find($id);
        $horario->dia = $request->dia;
        $horario->hora_inicio = $request->hora_inicio;
        $horario->hora_fin = $request->hora_fin;
        $horario->actividad_id = $request->actividad_id;
        $horario->escuela_id = $request->escuela_id;
        $horario->save();

        return redirect()->route('horarios.index')->with('success', 'Horario actualizado correctamente');
    }

    public function destroy($id){
        $horario = Horario::find($id);
        $horario->delete();
        return redirect()->route('horarios.index')->with('success', 'Horario eliminado correctamente');
    }

    public function show($id){
        $horario = Horario::find($id);
        return view('horarios.show', compact('horario'));
    }

    public function edit($id){
        $horario = Horario::find($id);
        return view('horarios.edit', compact('horario'));
    }

}
