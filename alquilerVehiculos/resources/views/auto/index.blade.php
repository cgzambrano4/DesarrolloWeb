@extends('layouts.app')

@section('template_title')
    Auto
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Auto') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('autos.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Id Auto</th>
										<th>Tipo Auto Id</th>
										<th>Marca</th>
										<th>Modelo</th>
										<th>Anio</th>
										<th>Placa</th>
										<th>Estado Disponibilidad</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($autos as $auto)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $auto->Id_Auto }}</td>
											<td>{{ $auto->Tipo_Auto_Id }}</td>
											<td>{{ $auto->Marca }}</td>
											<td>{{ $auto->Modelo }}</td>
											<td>{{ $auto->Anio }}</td>
											<td>{{ $auto->Placa }}</td>
											<td>{{ $auto->Estado_Disponibilidad }}</td>

                                            <td>
                                                <form action="{{ route('autos.destroy',$auto->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('autos.show',$auto->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('autos.edit',$auto->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
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
                {!! $autos->links() !!}
            </div>
        </div>
    </div>
@endsection
