<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('numero_cuenta') }}
            {{ Form::text('numero_cuenta', $cuenta->numero_cuenta, ['class' => 'form-control' . ($errors->has('numero_cuenta') ? ' is-invalid' : ''), 'placeholder' => 'Numero Cuenta']) }}
            {!! $errors->first('numero_cuenta', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('banco_id') }}
            {{ Form::text('banco_id', $cuenta->banco_id, ['class' => 'form-control' . ($errors->has('banco_id') ? ' is-invalid' : ''), 'placeholder' => 'Banco Id']) }}
            {!! $errors->first('banco_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>