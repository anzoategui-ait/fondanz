<div class="box box-info padding-1">
    <div class="box-body">
        
    <div class="row">
    <div class="col-md-6">
        <div class="form-group">
            {{ Form::label('codigo') }}
            {{ Form::text('codigo', $codigospostale->codigo, ['class' => 'form-control' . ($errors->has('codigo') ? ' is-invalid' : ''), 'placeholder' => 'Codigo']) }}
            {!! $errors->first('codigo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        </div>

        <div class="col-md-6">
        <div class="form-group">
            {{ Form::label('zona') }}
            {{ Form::text('zona', $codigospostale->zona, ['class' => 'form-control' . ($errors->has('zona') ? ' is-invalid' : ''), 'placeholder' => 'Zona']) }}
            {!! $errors->first('zona', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        </div>

        </div>

    </div>

    <br>

    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</div>