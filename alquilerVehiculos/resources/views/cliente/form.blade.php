<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Id_Cliente') }}
            {{ Form::text('Id_Cliente', $cliente->Id_Cliente, ['class' => 'form-control' . ($errors->has('Id_Cliente') ? ' is-invalid' : ''), 'placeholder' => 'Id Cliente']) }}
            {!! $errors->first('Id_Cliente', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Nombre_Cliente') }}
            {{ Form::text('Nombre_Cliente', $cliente->Nombre_Cliente, ['class' => 'form-control' . ($errors->has('Nombre_Cliente') ? ' is-invalid' : ''), 'placeholder' => 'Nombre Cliente']) }}
            {!! $errors->first('Nombre_Cliente', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Apellido_Cliente') }}
            {{ Form::text('Apellido_Cliente', $cliente->Apellido_Cliente, ['class' => 'form-control' . ($errors->has('Apellido_Cliente') ? ' is-invalid' : ''), 'placeholder' => 'Apellido Cliente']) }}
            {!! $errors->first('Apellido_Cliente', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Cedula_Cliente') }}
            {{ Form::text('Cedula_Cliente', $cliente->Cedula_Cliente, ['class' => 'form-control' . ($errors->has('Cedula_Cliente') ? ' is-invalid' : ''), 'placeholder' => 'Cedula Cliente']) }}
            {!! $errors->first('Cedula_Cliente', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Direccion_Cliente') }}
            {{ Form::text('Direccion_Cliente', $cliente->Direccion_Cliente, ['class' => 'form-control' . ($errors->has('Direccion_Cliente') ? ' is-invalid' : ''), 'placeholder' => 'Direccion Cliente']) }}
            {!! $errors->first('Direccion_Cliente', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Telefono_CLiente') }}
            {{ Form::text('Telefono_CLiente', $cliente->Telefono_CLiente, ['class' => 'form-control' . ($errors->has('Telefono_CLiente') ? ' is-invalid' : ''), 'placeholder' => 'Telefono Cliente']) }}
            {!! $errors->first('Telefono_CLiente', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Correo_Electronico_Cliente') }}
            {{ Form::text('Correo_Electronico_Cliente', $cliente->Correo_Electronico_Cliente, ['class' => 'form-control' . ($errors->has('Correo_Electronico_Cliente') ? ' is-invalid' : ''), 'placeholder' => 'Correo Electronico Cliente']) }}
            {!! $errors->first('Correo_Electronico_Cliente', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>