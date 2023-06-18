@extends('layouts.app')

@section('template_title')
    {{ $factura->name ?? "{{ __('Show') Factura" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Factura</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('facturas.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Id Factura:</strong>
                            {{ $factura->Id_Factura }}
                        </div>
                        <div class="form-group">
                            <strong>Empleado Id:</strong>
                            {{ $factura->Empleado_Id }}
                        </div>
                        <div class="form-group">
                            <strong>Cliente Id:</strong>
                            {{ $factura->Cliente_Id }}
                        </div>
                        <div class="form-group">
                            <strong>Auto Id:</strong>
                            {{ $factura->Auto_Id }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha Alquiler:</strong>
                            {{ $factura->Fecha_Alquiler }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha Devolución:</strong>
                            {{ $factura->Fecha_Devolución }}
                        </div>
                        <div class="form-group">
                            <strong>Monto Pagado:</strong>
                            {{ $factura->Monto_Pagado }}
                        </div>
                        <div class="form-group">
                            <strong>Metodo Pago Id:</strong>
                            {{ $factura->Metodo_Pago_Id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
