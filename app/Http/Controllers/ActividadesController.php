<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ActividadesController extends Controller
{
    /**
     * index para mostrar todas los actividad
     * store para guardar un actividad
     * update para actualizar un actividad
     * destroy para eliminar un actividad
     * edit para mostrar el formulario de edición
     */


    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required | min:3',
            'inscripcion' => 'required',
            'costo' => 'required',
            'telefono' => 'required',
            'escuela_id' => 'required',
            'requisitos' => 'required',
            'profesor_id' => 'required',
        ]);

        $actividad = new Actividad();
        $actividad->nombre = $request->nombre;
        $actividad->inscripcion = $request->inscripcion;    
        $actividad->costo = $request->costo;
        $actividad->escuela_id = $request->escuela_id;
        $actividad->requisitos = $request->requisitos;
        $actividad->telefono = $request->telefono;
        $actividad->profesor_id = $request->profesor_id;
        $actividad->save();

        return redirect()->route('index')->with('success', 'Actividad guardada correctamente');
    }

    public function update (Request $request, $id)
    {
        $actividad = Actividad::find($id);

        $actividad->nombre = $request->nombre;
        $actividad->inscripcion = $request->inscripcion;    
        $actividad->costo = $request->costo;
        $actividad->escuela_id = $request->escuela_id;
        $actividad->requisitos = $request->requisitos;
        $actividad->telefono = $request->telefono;
        $actividad->profesor_id = $request->profesor_id;
        $actividad->save();

        return redirect()->route('index')->with('success', 'Actividad actualizada');
    }

    public function destroy ($id)
    {
        $actividad = Todo::find ($id);
        $actividad->delete();

        return redirect()->route('index')->with('success', 'Actividad eliminada');
    }
}
