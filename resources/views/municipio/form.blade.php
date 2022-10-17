<div class="box box-info padding-1">
    <div class="box-body">
        
    <div class="row">

    <div class="col-md-6">
        <div class="form-group">
            {{ Form::label('nombre') }}
            {{ Form::text('nombre', $municipio->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre del Municipio']) }}
            {!! $errors->first('nombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        </div>

        <div class="col-md-6">
        <div class="form-group">
            {{ Form::label('codigo municipio') }}
            {{ Form::text('codmunicipio', $municipio->codmunicipio, ['class' => 'form-control' . ($errors->has('codmunicipio') ? ' is-invalid' : ''), 'placeholder' => 'Ingrese el Codigo del Municipio']) }}
            {!! $errors->first('codmunicipio', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        </div>

    </div>



    </div>
    <br>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</div>