<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('subproyecto_nombre') }}
            {{ Form::text('subproyecto_nombre', $subproyecto->subproyecto_nombre, ['class' => 'form-control' . ($errors->has('subproyecto_nombre') ? ' is-invalid' : ''), 'placeholder' => 'Subproyecto Nombre']) }}
            {!! $errors->first('subproyecto_nombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('subproyecto_descriccion') }}
            {{ Form::text('subproyecto_descriccion', $subproyecto->subproyecto_descriccion, ['class' => 'form-control' . ($errors->has('subproyecto_descriccion') ? ' is-invalid' : ''), 'placeholder' => 'Subproyecto Descriccion']) }}
            {!! $errors->first('subproyecto_descriccion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('subproyecto_monto') }}
            {{ Form::text('subproyecto_monto', $subproyecto->subproyecto_monto, ['class' => 'form-control' . ($errors->has('subproyecto_monto') ? ' is-invalid' : ''), 'placeholder' => 'Subproyecto Monto']) }}
            {!! $errors->first('subproyecto_monto', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('subproyecto_estado') }}
            {{ Form::text('subproyecto_estado', $subproyecto->subproyecto_estado, ['class' => 'form-control' . ($errors->has('subproyecto_estado') ? ' is-invalid' : ''), 'placeholder' => 'Subproyecto Estado']) }}
            {!! $errors->first('subproyecto_estado', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('proyecto_id') }}
            {{ Form::text('proyecto_id', $subproyecto->proyecto_id, ['class' => 'form-control' . ($errors->has('proyecto_id') ? ' is-invalid' : ''), 'placeholder' => 'Proyecto Id']) }}
            {!! $errors->first('proyecto_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>