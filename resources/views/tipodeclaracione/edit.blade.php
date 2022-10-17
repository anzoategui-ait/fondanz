@extends('layouts.app')

@section('template_title')
    Update Tipodeclaracione
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Editar Tipo de Declaracion</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('tipodeclaraciones.update', $tipodeclaracione->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('tipodeclaracione.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
