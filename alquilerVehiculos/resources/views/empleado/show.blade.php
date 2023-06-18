@extends('layouts.app')

@section('template_title')
    {{ $empleado->name ?? "{{ __('Show') Empleado" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Empleado</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('empleados.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Id Empleado:</strong>
                            {{ $empleado->Id_Empleado }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre Empleado:</strong>
                            {{ $empleado->Nombre_Empleado }}
                        </div>
                        <div class="form-group">
                            <strong>Apellido Empleado:</strong>
                            {{ $empleado->Apellido_Empleado }}
                        </div>
                        <div class="form-group">
                            <strong>Cedula Empleado:</strong>
                            {{ $empleado->Cedula_Empleado }}
                        </div>
                        <div class="form-group">
                            <strong>Direccion Empleado:</strong>
                            {{ $empleado->Direccion_Empleado }}
                        </div>
                        <div class="form-group">
                            <strong>Telefono Empleado:</strong>
                            {{ $empleado->Telefono_Empleado }}
                        </div>
                        <div class="form-group">
                            <strong>Correo Electronico Empleado:</strong>
                            {{ $empleado->Correo_Electronico_Empleado }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha Contrato:</strong>
                            {{ $empleado->Fecha_Contrato }}
                        </div>
                        <div class="form-group">
                            <strong>Salario:</strong>
                            {{ $empleado->Salario }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
