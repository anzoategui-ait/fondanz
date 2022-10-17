<div class="box box-info padding-1">
    <div class="box-body">
        
    <div class="row">

    <div class="col-md-6">
        <div class="form-group">
            {{ Form::label('nombre') }}
            {{ Form::text('nombre', $parroquia->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre de la parroquia']) }}
            {!! $errors->first('nombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        </div>

        <div class="col-md-6">
        <div class="form-group">
            {{ Form::label('municipio') }}
            {{ Form::select('municipio_id', $municipios, $parroquia->municipio_id, ['class' => 'form-control' . ($errors->has('municipio_id') ? ' is-invalid' : ''), 'placeholder' => 'Seleccione Municipio']) }}
            {!! $errors->first('municipio_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        </div>

    </div>

    </div>
    <br>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</div>