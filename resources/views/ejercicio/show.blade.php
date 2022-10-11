@extends('layouts.app')

@section('template_title')
    {{ $ejercicio->name ?? 'Show Ejercicio' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Ejercicio</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('ejercicios.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Ejercicio Year:</strong>
                            {{ $ejercicio->ejercicio_year }}
                        </div>
                        <div class="form-group">
                            <strong>Ejercicio Unidad Tributaria:</strong>
                            {{ $ejercicio->ejercicio_unidad_tributaria }}
                        </div>
                        <div class="form-group">
                            <strong>Ejercicio Unidad Minima:</strong>
                            {{ $ejercicio->ejercicio_unidad_minima }}
                        </div>
                        <div class="form-group">
                            <strong>Ejercicio Unidad Maxima:</strong>
                            {{ $ejercicio->ejercicio_unidad_maxima }}
                        </div>
                        <div class="form-group">
                            <strong>Ejercicio Cierre:</strong>
                            {{ $ejercicio->ejercicio_cierre }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
