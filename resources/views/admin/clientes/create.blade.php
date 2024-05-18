@extends('adminlte::page')

@section('title', 'Nuevo Cliente')
{{-- @section('plugins.Sweetalert2', true) --}}
@section('content_header')
    <h1>Registro de cliente</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-md-6">
            <div class="card">

                <div class="card-body">

                    {{-- @include('validators.forms') --}}

                    <form action="" method="POST" id="form_cliente">

                        <div class="form group pb-3">
                            <label for="">Nombre de Empresa</label>
                            <input type="text" placeholder="Ingrese Nombre" name="nombre_empresa" id="nombre"
                                class="form-control" required value="{{ old('nombre_empresa') }}">
                        </div>

                        <div class="form group pb-3">
                            <label for="">Nombre</label>
                            <input type="text" placeholder="Ingrese Nombre" name="nombre" id="nombre"
                                class="form-control" required value="{{ old('nombre') }}">
                        </div>
                        <div class="form group pb-3">
                            <label for="">Apellidos</label>
                            <input type="text" placeholder="Ingrese Apellidos" name="apellidos" id="apellidos"
                                class="form-control" required value="{{ old('apellidos') }}">
                        </div>
                        <div class="form group pb-3">
                            <div class="row">
                                <div class="col">
                                    <label for="">DNI</label>
                                    <input type="text" placeholder="DNI" name="dni" id="dni"
                                        class="form-control" required value="{{ old('dni') }}" maxlength="8">
                                </div>
                                <div class="col">
                                    <label for="">Celular</label>
                                    <input type="text" placeholder="Celular" name="celular" id="celular"
                                        class="form-control" required value="{{ old('celular') }}" maxlength="9">
                                </div>
                            </div>
                        </div>
                        <div class="form group pb-3">
                            <label for="">E-mail</label>
                            <input type="email" placeholder="E-mail" name="email" id="email" class="form-control"
                                required value="{{ old('email') }}">
                        </div>
                        <div class="form group pb-3">
                            <label for="">Dirección</label>
                            <input type="text" placeholder="Ingrese dirección" name="direccion" id="direccion"
                                class="form-control" required value="{{ old('direccion') }}">
                        </div>
                        <div class="form group mt-3">
                            @csrf
                            <button type="button" id="btn_Register" class="btn btn-success btn-xs"
                                data-url="{{ route('clientes.store') }}">Registrar cliente</button>
                            <a href="{{ route('clientes.index') }}" class="btn btn-warning btn-xs">Lista de clientes</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@stop

@section('css')
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="{{ asset('js/cliente.js') }}"></script>

@stop
