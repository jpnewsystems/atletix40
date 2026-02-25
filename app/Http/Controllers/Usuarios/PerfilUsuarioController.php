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

        $datos = [
            'telefono' => $request->telefono,
            'direccion' => $request->direccion,
            'pais' => $request->pais,
            'ciudad' => $request->ciudad,
            'alias' => $request->alias
        ];

        // Subir foto si existe
        if ($request->hasFile('foto')) {

            $nombre = time() . '.' . $request->foto->extension();

            $request->foto->move(public_path('fotos_perfil'), $nombre);

            $datos['foto'] = $nombre;
        }

        PerfilUsuario::updateOrCreate(
            ['user_id' => $user_id],
            $datos
        );

        return back()->with('success', 'Perfil actualizado');
    }
}
