@extends('layouts.app')

@section('template_title')
    {{ $tipodeclaracione->name ?? 'Show Tipodeclaracione' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Tipodeclaracione</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('tipodeclaraciones.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Tipodeclaracion:</strong>
                            {{ $tipodeclaracione->tipodeclaracion }}
                        </div>
                        <div class="form-group">
                            <strong>Porcentaje:</strong>
                            {{ $tipodeclaracione->porcentaje }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
