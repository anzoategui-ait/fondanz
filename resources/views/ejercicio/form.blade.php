<div class="box box-info padding-1">
    <div class="box-body">
    <div class="row">
                 <div class="col-md-3">
        <div class="form-group">
            {{ Form::label('ejercicio') }}
            {{ Form::text('ejercicio_year', $ejercicio->ejercicio_year, ['class' => 'form-control' . ($errors->has('ejercicio_year') ? ' is-invalid' : ''), 'placeholder' => 'Ingrese el año del Ejercicio']) }}
            {!! $errors->first('ejercicio_year', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        </div>

        <div class="col-md-3">
        <div class="form-group">
            {{ Form::label('Valor de la Unidad Tributaria') }}
            {{ Form::text('ejercicio_unidad_tributaria', $ejercicio->ejercicio_unidad_tributaria, ['class' => 'form-control' . ($errors->has('ejercicio_unidad_tributaria') ? ' is-invalid' : ''), 'placeholder' => 'Ingrese el valor']) }}
            {!! $errors->first('ejercicio_unidad_tributaria', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        </div>

        <div class="col-md-3">
        <div class="form-group">
            {{ Form::label('Se declara desde UT') }}
            {{ Form::text('ejercicio_unidad_minima', $ejercicio->ejercicio_unidad_minima, ['class' => 'form-control' . ($errors->has('ejercicio_unidad_minima') ? ' is-invalid' : ''), 'placeholder' => 'Ingrese el rango mínimo para declarar']) }}
            {!! $errors->first('ejercicio_unidad_minima', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        </div>

        <div class="col-md-3">
        <div class="form-group">
            {{ Form::label('se declara hasta') }}
            {{ Form::text('ejercicio_unidad_maxima', $ejercicio->ejercicio_unidad_maxima, ['class' => 'form-control' . ($errors->has('ejercicio_unidad_maxima') ? ' is-invalid' : ''), 'placeholder' => 'Ingrese rango máximo para declarar']) }}
            {!! $errors->first('ejercicio_unidad_maxima', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        </div>

        
        </div>
        <br>
        <div class="row">
                 <div class="col-md-3">
        <div class="form-group">
            {{ Form::label('Fecha de Cierre') }}
            {{ Form::date('ejercicio_cierre', $ejercicio->ejercicio_cierre, ['class' => 'form-control' . ($errors->has('ejercicio_cierre') ? ' is-invalid' : ''), 'placeholder' => 'Ingrese la fecha de Cierre']) }}
            {!! $errors->first('ejercicio_cierre', '<div class="invalid-feedback">:message</div>') !!}
        </div>

        </div>
        </div>

    </div>
    <br>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</div>