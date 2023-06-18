<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Id_Metodo_Pago') }}
            {{ Form::text('Id_Metodo_Pago', $metodoPago->Id_Metodo_Pago, ['class' => 'form-control' . ($errors->has('Id_Metodo_Pago') ? ' is-invalid' : ''), 'placeholder' => 'Id Metodo Pago']) }}
            {!! $errors->first('Id_Metodo_Pago', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Metodo') }}
            {{ Form::text('Metodo', $metodoPago->Metodo, ['class' => 'form-control' . ($errors->has('Metodo') ? ' is-invalid' : ''), 'placeholder' => 'Metodo']) }}
            {!! $errors->first('Metodo', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>