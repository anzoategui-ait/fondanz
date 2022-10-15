<div class="box box-info padding-1">
    <div class="box-body">
        
    <div class="row">
         <div class="col-md-4">

        <div class="form-group">
            {{ Form::label('nombre del proyecto') }}
            {{ Form::text('subproyecto_nombre', $subproyecto->subproyecto_nombre, ['class' => 'form-control' . ($errors->has('subproyecto_nombre') ? ' is-invalid' : ''), 'placeholder' => 'Ingrese el nombre del proyecto']) }}
            {!! $errors->first('subproyecto_nombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        </div>

        <div class="col-md-4">
        <div class="form-group">
            {{ Form::label('descripcion del proyecto') }}
            {{ Form::text('subproyecto_descriccion', $subproyecto->subproyecto_descriccion, ['class' => 'form-control' . ($errors->has('subproyecto_descriccion') ? ' is-invalid' : ''), 'placeholder' => 'Coloque una breve descripción del proyecto']) }}
            {!! $errors->first('subproyecto_descriccion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        </div>

        <div class="col-md-4">
        <div class="form-group">
            {{ Form::label('monto requerido') }}
            {{ Form::text('subproyecto_monto', $subproyecto->subproyecto_monto, ['class' => 'form-control' . ($errors->has('subproyecto_monto') ? ' is-invalid' : ''), 'placeholder' => 'Ingrese el Monto Requerido']) }}
            {!! $errors->first('subproyecto_monto', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        </div>

    </div>

        <div class="row">

        <div class="col-md-4">
        <div class="form-group">
            {{ Form::label('estado') }}
            {{ Form::select('subproyecto_estado', array('Aprobado' => 'Aprobado', 'No Aprobado' => 'No Aprobado', 'Cerrado' => 'Cerrado'), $subproyecto->subproyecto_estado, ['class' => 'form-control' . ($errors->has('subproyecto_estado') ? ' is-invalid' : ''), 'placeholder' => 'Seleccion un Estado']) }}
            {!! $errors->first('subproyecto_estado', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        </div>

        <div class="col-md-8">
        <div class="form-group">
            {{ Form::label('tipo de Proyecto') }}
            {{ Form::select('proyecto_id', $proyectos, $subproyecto->proyecto_id, ['class' => 'form-control' . ($errors->has('proyecto_id') ? ' is-invalid' : ''), 'placeholder' => 'Seleccione un tipo']) }}
            {!! $errors->first('proyecto_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        </div>
        </div>

    </div>
    <br>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</div>