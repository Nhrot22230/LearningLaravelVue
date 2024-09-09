<?php
namespace App\Http\Controllers;

use App\Models\Ciudad;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class CiudadController extends BaseController
{
    /**
     * Muestra una lista de las ciudades.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ciudades = Ciudad::all();
        return response()->json($ciudades);
    }

    /**
     * Muestra el formulario para crear una nueva ciudad.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Generalmente se usa para mostrar un formulario en aplicaciones web
    }

    /**
     * Almacena una nueva ciudad en la base de datos.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:100',
        ]);

        $ciudad = Ciudad::create($request->all());
        return response()->json($ciudad, 201);
    }

    /**
     * Muestra la ciudad especificada.
     *
     * @param  \App\Models\Ciudad  $ciudad
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ciudad = Ciudad::find($id);

        if (!$ciudad) {
            return response()->json(['error' => 'Ciudad no encontrada'], 404);
        }

        return response()->json($ciudad);
    }

    /**
     * Muestra el formulario para editar la ciudad especificada.
     *
     * @param  \App\Models\Ciudad  $ciudad
     * @return \Illuminate\Http\Response
     */
    public function edit(Ciudad $ciudad)
    {
        // Generalmente se usa para mostrar un formulario en aplicaciones web
    }

    /**
     * Actualiza la ciudad especificada en la base de datos.
     *
     * @param \Illuminate\Http\Request $request
     * @param  \App\Models\Ciudad  $ciudad
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ciudad $ciudad)
    {
        $request->validate([
            'nombre' => 'required|string|max:100',
        ]);

        $ciudad->update($request->all());
        return response()->json($ciudad);
    }

    /**
     * Elimina la ciudad especificada de la base de datos.
     *
     * @param  \App\Models\Ciudad  $ciudad
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ciudad $ciudad)
    {
        $ciudad->delete();
        return response()->json(null, 204);
    }
}
