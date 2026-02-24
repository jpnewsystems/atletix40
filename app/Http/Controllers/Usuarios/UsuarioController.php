<?php

namespace App\Http\Controllers\Usuarios;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{

    public function index()
    {
        $usuarios = User::orderBy('id', 'desc')->get();

        return view('app.usuarios.index', compact('usuarios'));
    }


    public function toggle($id)
    {

        $user = User::findOrFail($id);

        $user->activo = !$user->activo;

        $user->save();

        return back()->with('success', 'Estado actualizado');
    }


    public function rol($id)
    {

        $user = User::findOrFail($id);

        if ($user->rol == 'admin') {
            $user->rol = 'usuario';
        } else {
            $user->rol = 'admin';
        }

        $user->save();

        return back()->with('success', 'Rol actualizado');
    }
}
