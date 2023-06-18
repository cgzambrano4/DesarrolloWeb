@extends('layouts.app')

@section('template_title')
    {{ $auto->name ?? "{{ __('Show') Auto" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Auto</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('autos.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Id Auto:</strong>
                            {{ $auto->Id_Auto }}
                        </div>
                        <div class="form-group">
                            <strong>Tipo Auto Id:</strong>
                            {{ $auto->Tipo_Auto_Id }}
                        </div>
                        <div class="form-group">
                            <strong>Marca:</strong>
                            {{ $auto->Marca }}
                        </div>
                        <div class="form-group">
                            <strong>Modelo:</strong>
                            {{ $auto->Modelo }}
                        </div>
                        <div class="form-group">
                            <strong>Anio:</strong>
                            {{ $auto->Anio }}
                        </div>
                        <div class="form-group">
                            <strong>Placa:</strong>
                            {{ $auto->Placa }}
                        </div>
                        <div class="form-group">
                            <strong>Estado Disponibilidad:</strong>
                            {{ $auto->Estado_Disponibilidad }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
