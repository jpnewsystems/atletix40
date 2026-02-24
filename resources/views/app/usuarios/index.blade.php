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
    <div class="card">
        <div class="card-body">
            <table id="tablaUsuarios" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Email</th>
                        <th>Rol</th>
                        <th>Estado</th>
                        <th width="120">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($usuarios as $u)
                        <tr>
                            <td>{{ $u->id }}</td>
                            <td>{{ $u->name }}</td>
                            <td>{{ $u->email }}</td>
                            <td>
                                @if ($u->rol == 'admin')
                                    <span class="badge bg-danger">
                                        Admin
                                    </span>
                                @else
                                    <span class="badge bg-info">
                                        Usuario
                                    </span>
                                @endif
                            </td>

                            <td class="text-center">
                                @if ($u->activo)
                                    <span class="badge bg-success">
                                        <i class="fas fa-check-circle"></i> Activo
                                    </span>
                                @else
                                    <span class="badge bg-danger">
                                        <i class="fas fa-times-circle"></i> Inactivo
                                    </span>
                                @endif
                            </td>

                            <td class="text-center">
                                <a href="/usuarios/toggle/{{ $u->id }}" class="btn btn-sm btn-warning"
                                    title="Activar/Inactivar">
                                    <i class="fas fa-power-off"></i>
                                </a>
                                <a href="/usuarios/rol/{{ $u->id }}" class="btn btn-sm btn-primary"
                                    title="Cambiar rol">
                                    <i class="fas fa-user-shield"></i>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@stop


@section('js')

    <script>
        $(function() {

            $('#tablaUsuarios').DataTable({
                language: {
                    url: "https://cdn.datatables.net/plug-ins/1.13.7/i18n/es-ES.json"
                }
            });

        });
    </script>

@stop
