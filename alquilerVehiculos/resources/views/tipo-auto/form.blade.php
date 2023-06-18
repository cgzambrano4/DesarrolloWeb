<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Id_Tipo_Auto') }}
            {{ Form::text('Id_Tipo_Auto', $tipoAuto->Id_Tipo_Auto, ['class' => 'form-control' . ($errors->has('Id_Tipo_Auto') ? ' is-invalid' : ''), 'placeholder' => 'Id Tipo Auto']) }}
            {!! $errors->first('Id_Tipo_Auto', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Tipo') }}
            {{ Form::text('Tipo', $tipoAuto->Tipo, ['class' => 'form-control' . ($errors->has('Tipo') ? ' is-invalid' : ''), 'placeholder' => 'Tipo']) }}
            {!! $errors->first('Tipo', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>