<div class="box box-info padding-1">
    <div class="box-body">
        
    <div class="row">
    <div class="col-md-6">
        <div class="form-group">
            {{ Form::label('tipo de declaracion') }}
            {{ Form::text('tipodeclaracion', $tipodeclaracione->tipodeclaracion, ['class' => 'form-control' . ($errors->has('tipodeclaracion') ? ' is-invalid' : ''), 'placeholder' => 'Tipo de declaracion']) }}
            {!! $errors->first('tipodeclaracion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        </div>

        <div class="col-md-6">
        <div class="form-group">
            {{ Form::label('porcentaje') }}
            {{ Form::text('porcentaje', $tipodeclaracione->porcentaje, ['class' => 'form-control' . ($errors->has('porcentaje') ? ' is-invalid' : ''), 'placeholder' => 'Porcentaje']) }}
            {!! $errors->first('porcentaje', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        </div>

        </div>

    </div>

    <br>

    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</div>