<?php

namespace App\Http\Controllers;

use App\Models\Cuenta;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class CuentaController extends BaseController
{
    public function index()
    {
        $cuentas = Cuenta::with(['rol', 'usuario'])->get();
        return response()->json($cuentas);
    }

    public function create()
    {
        // Generalmente se usa para mostrar un formulario en aplicaciones web
    }

    public function store(Request $request)
    {
        $request->validate([
            'rol' => 'nullable|exists:rol,id',
            'usuario' => 'nullable|exists:usuario,dni',
            'password' => 'required|string|max:100',
            'saldo' => 'required|numeric',
        ]);

        $cuenta = Cuenta::create($request->all());
        return response()->json($cuenta, 201);
    }

    public function show(Cuenta $cuenta)
    {
        $cuenta->load('rol', 'usuario');
        return response()->json($cuenta);
    }

    public function edit(Cuenta $cuenta)
    {
        // Generalmente se usa para mostrar un formulario en aplicaciones web
    }

    public function update(Request $request, Cuenta $cuenta)
    {
        $request->validate([
            'rol' => 'nullable|exists:rol,id',
            'usuario' => 'nullable|exists:usuario,dni',
            'password' => 'required|string|max:100',
            'saldo' => 'required|numeric',
        ]);

        $cuenta->update($request->all());
        return response()->json($cuenta);
    }

    public function destroy(Cuenta $cuenta)
    {
        $cuenta->delete();
        return response()->json(null, 204);
    }
}
