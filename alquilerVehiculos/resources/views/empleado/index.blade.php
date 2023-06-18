@extends('layouts.app')

@section('template_title')
    Empleado
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Empleado') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('empleados.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Id Empleado</th>
										<th>Nombre Empleado</th>
										<th>Apellido Empleado</th>
										<th>Cedula Empleado</th>
										<th>Direccion Empleado</th>
										<th>Telefono Empleado</th>
										<th>Correo Electronico Empleado</th>
										<th>Fecha Contrato</th>
										<th>Salario</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($empleados as $empleado)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $empleado->Id_Empleado }}</td>
											<td>{{ $empleado->Nombre_Empleado }}</td>
											<td>{{ $empleado->Apellido_Empleado }}</td>
											<td>{{ $empleado->Cedula_Empleado }}</td>
											<td>{{ $empleado->Direccion_Empleado }}</td>
											<td>{{ $empleado->Telefono_Empleado }}</td>
											<td>{{ $empleado->Correo_Electronico_Empleado }}</td>
											<td>{{ $empleado->Fecha_Contrato }}</td>
											<td>{{ $empleado->Salario }}</td>

                                            <td>
                                                <form action="{{ route('empleados.destroy',$empleado->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('empleados.show',$empleado->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('empleados.edit',$empleado->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $empleados->links() !!}
            </div>
        </div>
    </div>
@endsection
