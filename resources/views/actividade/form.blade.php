<div class="box box-info padding-1">
    <div class="box-body">
        
    <div class="row">

        <div class="col-md-6">
        <div class="form-group">
            {{ Form::label('nombre') }}
            {{ Form::text('nombre', $actividade->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre de la actividad']) }}
            {!! $errors->first('nombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        </div>

        <div class="col-md-6">
        <div class="form-group">
            {{ Form::label('subsector') }}
            {{ Form::select('subsector_id',$subsectores, $actividade->subsector_id, ['class' => 'form-control' . ($errors->has('subsector_id') ? ' is-invalid' : ''), 'placeholder' => 'Seleccione un Subsector']) }}
            {!! $errors->first('subsector_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        </div>

        </div>

    </div>

    <br>

    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</div>