<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Id_Empleado') }}
            {{ Form::text('Id_Empleado', $empleado->Id_Empleado, ['class' => 'form-control' . ($errors->has('Id_Empleado') ? ' is-invalid' : ''), 'placeholder' => 'Id Empleado']) }}
            {!! $errors->first('Id_Empleado', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Nombre_Empleado') }}
            {{ Form::text('Nombre_Empleado', $empleado->Nombre_Empleado, ['class' => 'form-control' . ($errors->has('Nombre_Empleado') ? ' is-invalid' : ''), 'placeholder' => 'Nombre Empleado']) }}
            {!! $errors->first('Nombre_Empleado', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Apellido_Empleado') }}
            {{ Form::text('Apellido_Empleado', $empleado->Apellido_Empleado, ['class' => 'form-control' . ($errors->has('Apellido_Empleado') ? ' is-invalid' : ''), 'placeholder' => 'Apellido Empleado']) }}
            {!! $errors->first('Apellido_Empleado', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Cedula_Empleado') }}
            {{ Form::text('Cedula_Empleado', $empleado->Cedula_Empleado, ['class' => 'form-control' . ($errors->has('Cedula_Empleado') ? ' is-invalid' : ''), 'placeholder' => 'Cedula Empleado']) }}
            {!! $errors->first('Cedula_Empleado', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Direccion_Empleado') }}
            {{ Form::text('Direccion_Empleado', $empleado->Direccion_Empleado, ['class' => 'form-control' . ($errors->has('Direccion_Empleado') ? ' is-invalid' : ''), 'placeholder' => 'Direccion Empleado']) }}
            {!! $errors->first('Direccion_Empleado', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Telefono_Empleado') }}
            {{ Form::text('Telefono_Empleado', $empleado->Telefono_Empleado, ['class' => 'form-control' . ($errors->has('Telefono_Empleado') ? ' is-invalid' : ''), 'placeholder' => 'Telefono Empleado']) }}
            {!! $errors->first('Telefono_Empleado', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Correo_Electronico_Empleado') }}
            {{ Form::text('Correo_Electronico_Empleado', $empleado->Correo_Electronico_Empleado, ['class' => 'form-control' . ($errors->has('Correo_Electronico_Empleado') ? ' is-invalid' : ''), 'placeholder' => 'Correo Electronico Empleado']) }}
            {!! $errors->first('Correo_Electronico_Empleado', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Fecha_Contrato') }}
            {{ Form::text('Fecha_Contrato', $empleado->Fecha_Contrato, ['class' => 'form-control' . ($errors->has('Fecha_Contrato') ? ' is-invalid' : ''), 'placeholder' => 'Fecha Contrato']) }}
            {!! $errors->first('Fecha_Contrato', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Salario') }}
            {{ Form::text('Salario', $empleado->Salario, ['class' => 'form-control' . ($errors->has('Salario') ? ' is-invalid' : ''), 'placeholder' => 'Salario']) }}
            {!! $errors->first('Salario', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>