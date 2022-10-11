@extends('layouts.app')

@section('template_title')
    {{ $subproyecto->name ?? 'Show Subproyecto' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Subproyecto</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('subproyectos.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Subproyecto Nombre:</strong>
                            {{ $subproyecto->subproyecto_nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Subproyecto Descriccion:</strong>
                            {{ $subproyecto->subproyecto_descriccion }}
                        </div>
                        <div class="form-group">
                            <strong>Subproyecto Monto:</strong>
                            {{ $subproyecto->subproyecto_monto }}
                        </div>
                        <div class="form-group">
                            <strong>Subproyecto Estado:</strong>
                            {{ $subproyecto->subproyecto_estado }}
                        </div>
                        <div class="form-group">
                            <strong>Proyecto Id:</strong>
                            {{ $subproyecto->proyecto_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
