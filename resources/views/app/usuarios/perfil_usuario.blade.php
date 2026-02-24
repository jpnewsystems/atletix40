@extends('adminlte::page')

@section('title', 'Mi Perfil')

@section('content_header')

    <h1>Mi Perfil</h1>

@stop


@section('content')


    @if (session('success'))
        <div class="alert alert-success">

            {{ session('success') }}

        </div>
    @endif


    <div class="card">

        <div class="card-body">


            <form method="POST" action="/perfil_usuario">

                @csrf


                <div class="row">


                    <div class="col-md-6">

                        <label>Teléfono</label>

                        <input type="text" name="telefono" value="{{ $perfil->telefono ?? '' }}" class="form-control">

                    </div>



                    <div class="col-md-6">

                        <label>Alias</label>

                        <input type="text" name="alias" value="{{ $perfil->alias ?? '' }}" class="form-control">

                    </div>


                </div>



                <br>


                <div class="row">

                    <div class="col-md-6">

                        <label>País</label>

                        <input type="text" name="pais" value="{{ $perfil->pais ?? '' }}" class="form-control">

                    </div>


                    <div class="col-md-6">

                        <label>Ciudad</label>

                        <input type="text" name="ciudad" value="{{ $perfil->ciudad ?? '' }}" class="form-control">

                    </div>


                </div>



                <br>



                <label>Dirección</label>

                <input type="text" name="direccion" value="{{ $perfil->direccion ?? '' }}" class="form-control">


                <br>


                <button class="btn btn-danger">

                    Guardar Perfil

                </button>



            </form>


        </div>

    </div>


@stop
