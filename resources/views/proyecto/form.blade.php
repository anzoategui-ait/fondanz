<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('tipo_de_proyecto') }}
            {{ Form::text('proyecto_nombre', $proyecto->proyecto_nombre, ['class' => 'form-control' . ($errors->has('proyecto_nombre') ? ' is-invalid' : ''), 'placeholder' => 'Ingrese el Nombre del tipo de Proyecto']) }}
            {!! $errors->first('proyecto_nombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <br>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</div>