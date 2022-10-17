<div class="box box-info padding-1">
    <div class="box-body">
        
    <div class="row">
    <div class="col-md-6">
        <div class="form-group">
            {{ Form::label('tipo de empresa') }}
            {{ Form::text('tipoempresa', $tipoempresa->tipoempresa, ['class' => 'form-control' . ($errors->has('tipoempresa') ? ' is-invalid' : ''), 'placeholder' => 'Tipo de empresa']) }}
            {!! $errors->first('tipoempresa', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        </div>
        <div class="col-md-6">
        <div class="form-group">
            {{ Form::label('codigo de empresa') }}
            {{ Form::text('codigoempresa', $tipoempresa->codigoempresa, ['class' => 'form-control' . ($errors->has('codigoempresa') ? ' is-invalid' : ''), 'placeholder' => 'Codigo de empresa']) }}
            {!! $errors->first('codigoempresa', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        </div>
    </div>

    </div>

    <br>

    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</div>