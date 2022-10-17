<div class="box box-info padding-1">
    <div class="box-body">
        
    <div class="row">
    <div class="col-md-6">

        <div class="form-group">
            {{ Form::label('Nombre del Sub Sector') }}
            {{ Form::text('nombre', $subsectore->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('nombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        </div>

        <div class="col-md-6">
        <div class="form-group">
            {{ Form::label('sector') }}
            {{ Form::select('sector_id', $sectores, $subsectore->sector_id, ['class' => 'form-control' . ($errors->has('sector_id') ? ' is-invalid' : ''), 'placeholder' => 'Seleccione un sector']) }}
            {!! $errors->first('sector_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        </div>

        </div>

    </div>

    <br>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</div>