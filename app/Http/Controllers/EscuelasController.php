<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EscuelasController extends Controller
{
    /**
     * index para mostrar todas las escuelas
     * store para guardar una escuela
     * update para actualizar una escuela
     * destroy para eliminar una escuela
     * edit para mostrar el formulario de edición
     */


    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required | min:3',
            'ubicacion' => 'required | unique:escuelas',
            'horario_id' => 'required',
            'actividad_id' => 'required',
        ]);

        $escuela = new Escuela();
        $escuela->nombre = $request->nombre;
        $escuela->ubicacion = $request->ubicacion;
        $escuela->horario_id = $request->horario_id;
        $escuela->actividad_id = $request->actividad_id;
        $escuela->save();

        return redirect()->route('index')->with('success', 'Escuela guardada correctamente');
    }

    public function update (Request $request, $id)
    {
        $escuela = Escuela::find($id);

        $escuela->nombre = $request->nombre;
        $escuela->ubicacion = $request->ubicacion;
        $escuela->horario_id = $request->horario_id;
        $escuela->actividad_id = $request->actividad_id;
        $escuela->save();

        return redirect()->route('index')->with('success', 'Escuela actualizada');
    }

    public function destroy ($id)
    {
        $escuela = Todo::find ($id);
        $escuela->delete();

        return redirect()->route('index')->with('success', 'Escuela eliminada');
    }
}