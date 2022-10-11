<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('proyecto_nombre') }}
            {{ Form::text('proyecto_nombre', $proyecto->proyecto_nombre, ['class' => 'form-control' . ($errors->has('proyecto_nombre') ? ' is-invalid' : ''), 'placeholder' => 'Proyecto Nombre']) }}
            {!! $errors->first('proyecto_nombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>