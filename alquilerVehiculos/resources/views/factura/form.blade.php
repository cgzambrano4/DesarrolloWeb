<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Id_Factura') }}
            {{ Form::text('Id_Factura', $factura->Id_Factura, ['class' => 'form-control' . ($errors->has('Id_Factura') ? ' is-invalid' : ''), 'placeholder' => 'Id Factura']) }}
            {!! $errors->first('Id_Factura', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Empleado_Id') }}
            {{ Form::text('Empleado_Id', $factura->Empleado_Id, ['class' => 'form-control' . ($errors->has('Empleado_Id') ? ' is-invalid' : ''), 'placeholder' => 'Empleado Id']) }}
            {!! $errors->first('Empleado_Id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Cliente_Id') }}
            {{ Form::text('Cliente_Id', $factura->Cliente_Id, ['class' => 'form-control' . ($errors->has('Cliente_Id') ? ' is-invalid' : ''), 'placeholder' => 'Cliente Id']) }}
            {!! $errors->first('Cliente_Id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Auto_Id') }}
            {{ Form::text('Auto_Id', $factura->Auto_Id, ['class' => 'form-control' . ($errors->has('Auto_Id') ? ' is-invalid' : ''), 'placeholder' => 'Auto Id']) }}
            {!! $errors->first('Auto_Id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Fecha_Alquiler') }}
            {{ Form::text('Fecha_Alquiler', $factura->Fecha_Alquiler, ['class' => 'form-control' . ($errors->has('Fecha_Alquiler') ? ' is-invalid' : ''), 'placeholder' => 'Fecha Alquiler']) }}
            {!! $errors->first('Fecha_Alquiler', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Fecha_Devolución') }}
            {{ Form::text('Fecha_Devolución', $factura->Fecha_Devolución, ['class' => 'form-control' . ($errors->has('Fecha_Devolución') ? ' is-invalid' : ''), 'placeholder' => 'Fecha Devolución']) }}
            {!! $errors->first('Fecha_Devolución', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Monto_Pagado') }}
            {{ Form::text('Monto_Pagado', $factura->Monto_Pagado, ['class' => 'form-control' . ($errors->has('Monto_Pagado') ? ' is-invalid' : ''), 'placeholder' => 'Monto Pagado']) }}
            {!! $errors->first('Monto_Pagado', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Metodo_Pago_Id') }}
            {{ Form::text('Metodo_Pago_Id', $factura->Metodo_Pago_Id, ['class' => 'form-control' . ($errors->has('Metodo_Pago_Id') ? ' is-invalid' : ''), 'placeholder' => 'Metodo Pago Id']) }}
            {!! $errors->first('Metodo_Pago_Id', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>