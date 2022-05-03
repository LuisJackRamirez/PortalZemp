<?php

namespace App\Http\Controllers;

use App\Models\Actividad;
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
            'dias' => 'required',
            'hora_inicio' => 'required',
            'hora_fin' => 'required',
            'escuela_id' => 'required | exists:escuelas,id',
            'requisitos' => 'required',
            'profesor_id' => 'required | exists:profesores,id',
        ]);

        $actividad = new Actividad();
        $actividad->nombre = $request->nombre;
        $actividad->inscripcion = $request->inscripcion;
        $actividad->costo = $request->costo;
        $actividad->dias = $request->dias;
        $actividad->hora_inicio = $request->hora_inicio;
        $actividad->hora_fin = $request->hora_fin;
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
        $actividad = Actividad::find ($id);
        $actividad->delete();

        return redirect()->route('index')->with('success', 'Actividad eliminada');
    }
}
