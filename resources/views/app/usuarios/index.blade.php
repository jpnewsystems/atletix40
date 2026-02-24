@extends('adminlte::page')

@section('title', 'Usuarios')

@section('content_header')

    <h1>Administración de Usuarios</h1>

@stop

@section('content')

    @if (session('success'))
        <div class="alert alert-success">

            {{ session('success') }}

        </div>
    @endif



    <table class="table table-bordered table-striped">

        <tr>

            <th>ID</th>
            <th>Nombre</th>
            <th>Email</th>
            <th>Rol</th>
            <th>Estado</th>
            <th>Acciones</th>

        </tr>


        @foreach ($usuarios as $u)
            <tr>

                <td>{{ $u->id }}</td>

                <td>{{ $u->name }}</td>

                <td>{{ $u->email }}</td>


                <td>

                    @if ($u->rol == 'admin')
                        <span class="badge bg-danger">

                            Administrador

                        </span>
                    @else
                        <span class="badge bg-info">

                            Usuario

                        </span>
                    @endif

                </td>


                <td>

                    @if ($u->activo)
                        <span class="badge bg-success">

                            Activo

                        </span>
                    @else
                        <span class="badge bg-secondary">

                            Inactivo

                        </span>
                    @endif

                </td>



                <td>

                    <a href="/usuarios/toggle/{{ $u->id }}" class="btn btn-warning btn-sm">

                        Activar/Inactivar

                    </a>


                    <a href="/usuarios/rol/{{ $u->id }}" class="btn btn-primary btn-sm">

                        Cambiar Rol

                    </a>


                </td>


            </tr>
        @endforeach


    </table>

@stop
