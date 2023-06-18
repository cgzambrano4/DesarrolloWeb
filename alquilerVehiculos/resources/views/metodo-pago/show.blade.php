@extends('layouts.app')

@section('template_title')
    {{ $metodoPago->name ?? "{{ __('Show') Metodo Pago" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Metodo Pago</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('metodo-pagos.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Id Metodo Pago:</strong>
                            {{ $metodoPago->Id_Metodo_Pago }}
                        </div>
                        <div class="form-group">
                            <strong>Metodo:</strong>
                            {{ $metodoPago->Metodo }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
