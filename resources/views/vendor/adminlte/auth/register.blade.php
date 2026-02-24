@extends('adminlte::auth.auth-page', ['authType' => 'register'])

@section('adminlte_css_pre')
    <link rel="stylesheet" href="{{ asset('vendor/icheck-bootstrap/icheck-bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/atletix/login.css') }}">
@stop

@php
    $loginUrl = View::getSection('login_url') ?? config('adminlte.login_url', 'login');
    $registerUrl = View::getSection('register_url') ?? config('adminlte.register_url', 'register');

    if (config('adminlte.use_route_url', false)) {
        $loginUrl = $loginUrl ? route($loginUrl) : '';
        $registerUrl = $registerUrl ? route($registerUrl) : '';
    } else {
        $loginUrl = $loginUrl ? url($loginUrl) : '';
        $registerUrl = $registerUrl ? url($registerUrl) : '';
    }
@endphp


{{-- HEADER PERSONALIZADO --}}
@section('auth_header')

    <div style="text-align:center">
        <p style="font-size:13px; opacity:0.8; margin-top:6px;">Transforma tu disciplina en resultados</p>
    </div>

    </div>

@stop

{{-- FORMULARIO --}}
@section('auth_body')

    <form action="{{ $registerUrl }}" method="post">
        @csrf


        {{-- Nombre --}}
        <div class="input-group mb-3">

            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
                value="{{ old('name') }}" placeholder="Nombre completo" autofocus>

            <div class="input-group-append">
                <div class="input-group-text">
                    <span class="fas fa-user"></span>
                </div>
            </div>

            @error('name')
                <span class="invalid-feedback">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

        </div>



        {{-- Email --}}
        <div class="input-group mb-3">

            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"
                value="{{ old('email') }}" placeholder="Correo electrónico">

            <div class="input-group-append">
                <div class="input-group-text">
                    <span class="fas fa-envelope"></span>
                </div>
            </div>

            @error('email')
                <span class="invalid-feedback">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

        </div>



        {{-- Password --}}
        <div class="input-group mb-3">

            <input type="password" name="password" class="form-control @error('password') is-invalid @enderror"
                placeholder="Contraseña">

            <div class="input-group-append">
                <div class="input-group-text">
                    <span class="fas fa-lock"></span>
                </div>
            </div>

            @error('password')
                <span class="invalid-feedback">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

        </div>



        {{-- Confirm Password --}}
        <div class="input-group mb-3">

            <input type="password" name="password_confirmation" class="form-control" placeholder="Confirmar contraseña">

            <div class="input-group-append">
                <div class="input-group-text">
                    <span class="fas fa-lock"></span>
                </div>
            </div>

        </div>



        {{-- BOTON --}}
        <button type="submit" class="btn btn-danger btn-block">

            <span class="fas fa-user-plus"></span>

            Crear Cuenta

        </button>

    </form>

@stop



{{-- FOOTER --}}
@section('auth_footer')

    <p class="text-center">

        <a href="{{ $loginUrl }}">
            Ya tengo una cuenta
        </a>

    </p>

@stop
