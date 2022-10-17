@extends('layouts.app')

@section('template_title')
    {{ $subsectore->name ?? 'Show Subsectore' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Subsectore</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('subsectores.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $subsectore->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Sector Id:</strong>
                            {{ $subsectore->sector_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
