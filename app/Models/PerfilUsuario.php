<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PerfilUsuario extends Model
{

    protected $table = "perfil_usuario";

    protected $fillable = [

        'user_id',
        'telefono',
        'direccion',
        'pais',
        'ciudad',
        'alias'

    ];
}
