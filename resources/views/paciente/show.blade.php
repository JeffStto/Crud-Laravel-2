@extends('layouts.app')

@section('template_title')
    {{ $paciente->name ?? 'Show Paciente' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Info Paciente</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-secondary" href="{{ route('paciente.index') }}"> Volver</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $paciente->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Apellido:</strong>
                            {{ $paciente->apellido }}
                        </div>
                        <div class="form-group">
                            <strong>Tipodoc:</strong>
                            {{ $paciente->tipoDoc }}
                        </div>
                        <div class="form-group">
                            <strong>Doc:</strong>
                            {{ $paciente->doc }}
                        </div>
                        <div class="form-group">
                            <strong>Genero:</strong>
                            {{ $paciente->genero }}
                        </div>
                        <div class="form-group">
                            <strong>Fechanacimiento:</strong>
                            {{ $paciente->fechaNacimiento }}
                        </div>
                        <div class="form-group">
                            <strong>Estadocivil:</strong>
                            {{ $paciente->estadoCivil }}
                        </div>
                        <div class="form-group">
                            <strong>Direccion:</strong>
                            {{ $paciente->direccion }}
                        </div>
                        <div class="form-group">
                            <strong>Telefono:</strong>
                            {{ $paciente->telefono }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
