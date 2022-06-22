<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('nombre') }}
            {{ Form::text('nombre', $paciente->nombre, ['class' => 'form-control mb-2' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('nombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('apellido') }}
            {{ Form::text('apellido', $paciente->apellido, ['class' => 'form-control mb-2' . ($errors->has('apellido') ? ' is-invalid' : ''), 'placeholder' => 'Apellido']) }}
            {!! $errors->first('apellido', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('tipoDoc') }}
            {{ Form::text('tipoDoc', $paciente->tipoDoc, ['class' => 'form-control mb-2' . ($errors->has('tipoDoc') ? ' is-invalid' : ''), 'placeholder' => 'Tipodoc']) }}
            {!! $errors->first('tipoDoc', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('doc') }}
            {{ Form::text('doc', $paciente->doc, ['class' => 'form-control mb-2' . ($errors->has('doc') ? ' is-invalid' : ''), 'placeholder' => 'Doc']) }}
            {!! $errors->first('doc', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('genero') }}
            {{ Form::text('genero', $paciente->genero, ['class' => 'form-control mb-2' . ($errors->has('genero') ? ' is-invalid' : ''), 'placeholder' => 'Genero']) }}
            {!! $errors->first('genero', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fechaNacimiento') }}
            {{ Form::text('fechaNacimiento', $paciente->fechaNacimiento, ['class' => 'form-control mb-2' . ($errors->has('fechaNacimiento') ? ' is-invalid' : ''), 'placeholder' => 'Fechanacimiento']) }}
            {!! $errors->first('fechaNacimiento', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('estadoCivil') }}
            {{ Form::text('estadoCivil', $paciente->estadoCivil, ['class' => 'form-control mb-2' . ($errors->has('estadoCivil') ? ' is-invalid' : ''), 'placeholder' => 'Estadocivil']) }}
            {!! $errors->first('estadoCivil', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('direccion') }}
            {{ Form::text('direccion', $paciente->direccion, ['class' => 'form-control mb-2' . ($errors->has('direccion') ? ' is-invalid' : ''), 'placeholder' => 'Direccion']) }}
            {!! $errors->first('direccion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('telefono') }}
            {{ Form::text('telefono', $paciente->telefono, ['class' => 'form-control mb-2' . ($errors->has('telefono') ? ' is-invalid' : ''), 'placeholder' => 'Telefono']) }}
            {!! $errors->first('telefono', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</div>