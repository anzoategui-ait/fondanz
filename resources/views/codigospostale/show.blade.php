@extends('layouts.app')

@section('template_title')
    {{ $codigospostale->name ?? 'Show Codigospostale' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Codigospostale</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('codigospostales.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Codigo:</strong>
                            {{ $codigospostale->codigo }}
                        </div>
                        <div class="form-group">
                            <strong>Zona:</strong>
                            {{ $codigospostale->zona }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
