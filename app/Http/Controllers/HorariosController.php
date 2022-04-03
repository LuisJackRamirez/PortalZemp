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
                'hora_inicio' => 'required',
                'hora_fin' => 'required | after:hora_inicio',
            ]
        );

        $horario = new Horario;
        $horario->dia = $request->dia;
        $horario->hora_inicio = $request->hora_inicio;
        $horario->hora_fin = $request->hora_fin;
        $horario->save();

        return redirect()->route('horarios')->with('success', 'Horario creado correctamente');
    }

    public function update(Request $request, $id){

        $request->validate(
            [
                'dia' => 'required | string',
                'hora_inicio' => 'required',
                'hora_fin' => 'required | after:hora_inicio',
            ]
        );

        $horario = Horario::find($id);
        $horario->dia = $request->dia;
        $horario->hora_inicio = $request->hora_inicio;
        $horario->hora_fin = $request->hora_fin;
        $horario->save();

        return redirect()->route('horarios')->with('success', 'Horario actualizado correctamente');
    }

    public function destroy($id){
        $horario = Horario::find($id);
        $horario->delete();
        return redirect()->route('horarios')->with('success', 'Horario eliminado correctamente');
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
