<?php

namespace App\Http\Controllers;

use App\Models\Profesor;
use Illuminate\Http\Request;

class ProfesoresController extends Controller
{
    /**
     * index para mostrar todas los profesores/as
     * store para guardar un profesor/a
     * update para actualizar un profesor/a
     * destroy para eliminar un profesor/a
     * edit para mostrar el formulario de edición
     */

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required | min:3',
            'email' => 'required | email | unique:profesores',
            'telefono' => 'required',
            'informacionAdicional' => 'nullable',
        ]);

        $profesor = new Profesor;
        $profesor->nombre = $request->nombre;
        $profesor->email = $request->email;
        $profesor->telefono = $request->telefono;
        $profesor->informacion_adicional = $request->informacion_adicional;
        $profesor->save();

        return redirect()->route('profesores')->with('success', 'Profesor/a guardada correctamente');
    }

    public function update (Request $request, $id)
    {
        $profesor = Profesor::find($id);

        $profesor->nombre = $request->nombre;
        $profesor->email = $request->email;
        $profesor->telefono = $request->telefono;
        $profesor->informacion_adicional = $request->informacion_adicional;
        $profesor->save();

        return redirect()->route('profesores')->with('success', 'Registro Profesor/a actualizado');
    }

    public function destroy ($id)
    {
        $profesor = Profesor::find ($id);
        $profesor->delete();

        return  redirect()->route('profesores')->with('success', 'Registro profesor/a eliminado');
    }
}
