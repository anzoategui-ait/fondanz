<div class="box box-info padding-1">
    <div class="box-body">
        
    <div class="row">
                 <div class="col-md-6">
        <div class="form-group">
            {{ Form::label('número_de_cuenta') }}
            {{ Form::text('numero_cuenta', $cuenta->numero_cuenta, ['class' => 'form-control' . ($errors->has('numero_cuenta') ? ' is-invalid' : ''), 'placeholder' => 'Ingrese el Número de Cuenta']) }}
            {!! $errors->first('numero_cuenta', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        </div>
        <div class="col-md-6">
        <div class="form-group">
            {{ Form::label('banco') }}
            {{ Form::select('banco_id', $bancos, $cuenta->banco_id, ['class' => 'form-control' . ($errors->has('banco_id') ? ' is-invalid' : ''), 'placeholder' => 'Seleccione un Banco']) }}
            {!! $errors->first('banco_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        </div>
        </div>
        

    </div>
    <br>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</div>