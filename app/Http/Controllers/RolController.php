<?php
namespace App\Http\Controllers;

use App\Models\Rol;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class RolController extends BaseController
{
    public function index()
    {
        $roles = Rol::all();
        return response()->json($roles);
    }

    public function create()
    {
        // Generalmente se usa para mostrar un formulario en aplicaciones web
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:50',
        ]);

        $rol = Rol::create($request->all());
        return response()->json($rol, 201);
    }

    public function show($id)
    {
        $rol = Rol::find($id);

        if (!$rol) {
            return response()->json(['error' => 'Rol no encontrado'], 404);
        }

        return response()->json($rol);
    }

    public function edit(Rol $rol)
    {
        // Generalmente se usa para mostrar un formulario en aplicaciones web
    }

    public function update(Request $request, Rol $rol)
    {
        $request->validate([
            'nombre' => 'required|string|max:50',
        ]);

        $rol->update($request->all());
        return response()->json($rol);
    }

    public function destroy(Rol $rol)
    {
        $rol->delete();
        return response()->json(null, 204);
    }
}
