@extends('layouts.app')

@section('template_title')
    Paciente
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Lista de Pacientes') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('paciente.create') }}" class="btn btn-success btn-sm float-right"  data-placement="left">
                                  {{ __('Nuevo Paciente') }}
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
                                        
										<th>Nombre</th>
										<th>Apellido</th>
										<th>Tipodoc</th>
										<th>Doc</th>
										<th>Genero</th>
										<th>Fechanacimiento</th>
										<th>Estadocivil</th>
										<th>Direccion</th>
										<th>Telefono</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($pacientes as $paciente)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $paciente->nombre }}</td>
											<td>{{ $paciente->apellido }}</td>
											<td>{{ $paciente->tipoDoc }}</td>
											<td>{{ $paciente->doc }}</td>
											<td>{{ $paciente->genero }}</td>
											<td>{{ $paciente->fechaNacimiento }}</td>
											<td>{{ $paciente->estadoCivil }}</td>
											<td>{{ $paciente->direccion }}</td>
											<td>{{ $paciente->telefono }}</td>

                                            <td>
                                                <form action="{{ route('paciente.destroy',$paciente->id) }}" method="POST">
                                                    <a class="btn btn-sm btn btn-primary " href="{{ route('paciente.show',$paciente->id) }}"><i class="fa fa-fw fa-eye"></i>Ver Paciente</a>
                                                    <a class="btn btn-sm btn-warning" href="{{ route('paciente.edit',$paciente->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Eliminar</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $pacientes->links() !!}
            </div>
        </div>
    </div>
@endsection
