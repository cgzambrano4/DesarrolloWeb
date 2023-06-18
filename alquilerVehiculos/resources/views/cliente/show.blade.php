@extends('layouts.app')

@section('template_title')
    {{ $cliente->name ?? "{{ __('Show') Cliente" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Cliente</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('clientes.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Id Cliente:</strong>
                            {{ $cliente->Id_Cliente }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre Cliente:</strong>
                            {{ $cliente->Nombre_Cliente }}
                        </div>
                        <div class="form-group">
                            <strong>Apellido Cliente:</strong>
                            {{ $cliente->Apellido_Cliente }}
                        </div>
                        <div class="form-group">
                            <strong>Cedula Cliente:</strong>
                            {{ $cliente->Cedula_Cliente }}
                        </div>
                        <div class="form-group">
                            <strong>Direccion Cliente:</strong>
                            {{ $cliente->Direccion_Cliente }}
                        </div>
                        <div class="form-group">
                            <strong>Telefono Cliente:</strong>
                            {{ $cliente->Telefono_CLiente }}
                        </div>
                        <div class="form-group">
                            <strong>Correo Electronico Cliente:</strong>
                            {{ $cliente->Correo_Electronico_Cliente }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
