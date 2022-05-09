<?php

namespace App\Http\Controllers;

use App\Models\ImageCarrousel;
use Illuminate\Http\Request;

class ImageCarrouselController extends Controller
{
    /**
     * It gets all the images from the database and passes them to the view
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $images = ImageCarrousel::all();
        return view('image-carrousel', compact('images'));
    }

    /**
     * 1. Validate the request
     * 2. Create a new file name
     * 3. Move the image to the public folder
     * 4. Create a new record in the database
     * 5. Return a success message
     *
     * @param Request request The request object.
     */
    public function upload(Request $request)
    {
        $this->validate($request, [
            'nombre' => 'required',
            'imagen' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);


        $input['imagen'] = time().'.'.$request->imagen->getClientOriginalExtension();
        $request->imagen->move(public_path('images'), $input['imagen']);


        $input['nombre'] = $request->nombre;
        ImageCarrousel::create($input);


        return back()
            ->with('success','Imagen cargada correctamente');
    }

    public function destroy($id)
    {
        ImageCarrousel::find($id)->delete();
        return back()
            ->with('success','Imagen eliminada correctamente');
    }
}
