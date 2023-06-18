@extends('layouts.app')

@section('template_title')
    {{ $tipoAuto->name ?? "{{ __('Show') Tipo Auto" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Tipo Auto</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('tipo-autos.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Id Tipo Auto:</strong>
                            {{ $tipoAuto->Id_Tipo_Auto }}
                        </div>
                        <div class="form-group">
                            <strong>Tipo:</strong>
                            {{ $tipoAuto->Tipo }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
