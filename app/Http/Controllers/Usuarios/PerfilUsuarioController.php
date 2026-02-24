<?php

namespace App\Http\Controllers\Usuarios;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PerfilUsuario;

class PerfilUsuarioController extends Controller
{

    public function index()
    {

        $user_id = auth()->id();

        $perfil = PerfilUsuario::where('user_id', $user_id)->first();

        return view('app.usuarios.perfil_usuario', compact('perfil'));
    }



    public function guardar(Request $request)
    {

        $user_id = auth()->id();

        PerfilUsuario::updateOrCreate(

            ['user_id' => $user_id],

            [

                'telefono' => $request->telefono,
                'direccion' => $request->direccion,
                'pais' => $request->pais,
                'ciudad' => $request->ciudad,
                'alias' => $request->alias

            ]

        );


        return back()->with('success', 'Perfil actualizado');
    }
}
