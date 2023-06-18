<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Id_Auto') }}
            {{ Form::text('Id_Auto', $auto->Id_Auto, ['class' => 'form-control' . ($errors->has('Id_Auto') ? ' is-invalid' : ''), 'placeholder' => 'Id Auto']) }}
            {!! $errors->first('Id_Auto', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Tipo_Auto_Id') }}
            {{ Form::text('Tipo_Auto_Id', $auto->Tipo_Auto_Id, ['class' => 'form-control' . ($errors->has('Tipo_Auto_Id') ? ' is-invalid' : ''), 'placeholder' => 'Tipo Auto Id']) }}
            {!! $errors->first('Tipo_Auto_Id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Marca') }}
            {{ Form::text('Marca', $auto->Marca, ['class' => 'form-control' . ($errors->has('Marca') ? ' is-invalid' : ''), 'placeholder' => 'Marca']) }}
            {!! $errors->first('Marca', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Modelo') }}
            {{ Form::text('Modelo', $auto->Modelo, ['class' => 'form-control' . ($errors->has('Modelo') ? ' is-invalid' : ''), 'placeholder' => 'Modelo']) }}
            {!! $errors->first('Modelo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Anio') }}
            {{ Form::text('Anio', $auto->Anio, ['class' => 'form-control' . ($errors->has('Anio') ? ' is-invalid' : ''), 'placeholder' => 'Anio']) }}
            {!! $errors->first('Anio', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Placa') }}
            {{ Form::text('Placa', $auto->Placa, ['class' => 'form-control' . ($errors->has('Placa') ? ' is-invalid' : ''), 'placeholder' => 'Placa']) }}
            {!! $errors->first('Placa', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Estado_Disponibilidad') }}
            {{ Form::text('Estado_Disponibilidad', $auto->Estado_Disponibilidad, ['class' => 'form-control' . ($errors->has('Estado_Disponibilidad') ? ' is-invalid' : ''), 'placeholder' => 'Estado Disponibilidad']) }}
            {!! $errors->first('Estado_Disponibilidad', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>