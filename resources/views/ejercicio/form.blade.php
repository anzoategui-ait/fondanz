<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('ejercicio_year') }}
            {{ Form::text('ejercicio_year', $ejercicio->ejercicio_year, ['class' => 'form-control' . ($errors->has('ejercicio_year') ? ' is-invalid' : ''), 'placeholder' => 'Ejercicio Year']) }}
            {!! $errors->first('ejercicio_year', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('ejercicio_unidad_tributaria') }}
            {{ Form::text('ejercicio_unidad_tributaria', $ejercicio->ejercicio_unidad_tributaria, ['class' => 'form-control' . ($errors->has('ejercicio_unidad_tributaria') ? ' is-invalid' : ''), 'placeholder' => 'Ejercicio Unidad Tributaria']) }}
            {!! $errors->first('ejercicio_unidad_tributaria', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('ejercicio_unidad_minima') }}
            {{ Form::text('ejercicio_unidad_minima', $ejercicio->ejercicio_unidad_minima, ['class' => 'form-control' . ($errors->has('ejercicio_unidad_minima') ? ' is-invalid' : ''), 'placeholder' => 'Ejercicio Unidad Minima']) }}
            {!! $errors->first('ejercicio_unidad_minima', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('ejercicio_unidad_maxima') }}
            {{ Form::text('ejercicio_unidad_maxima', $ejercicio->ejercicio_unidad_maxima, ['class' => 'form-control' . ($errors->has('ejercicio_unidad_maxima') ? ' is-invalid' : ''), 'placeholder' => 'Ejercicio Unidad Maxima']) }}
            {!! $errors->first('ejercicio_unidad_maxima', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('ejercicio_cierre') }}
            {{ Form::text('ejercicio_cierre', $ejercicio->ejercicio_cierre, ['class' => 'form-control' . ($errors->has('ejercicio_cierre') ? ' is-invalid' : ''), 'placeholder' => 'Ejercicio Cierre']) }}
            {!! $errors->first('ejercicio_cierre', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>