@extends('layouts.app')

@section('template_title')
    Tipodeclaracione
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Tipo de declaraciones') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('tipodeclaraciones.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Crear Nuevo Tipo de Declaracion') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Tipo de declaracion</th>
										<th>Porcentaje</th>

                                        <th>Opciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($tipodeclaraciones as $tipodeclaracione)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $tipodeclaracione->tipodeclaracion }}</td>
											<td>{{ $tipodeclaracione->porcentaje }}</td>

                                            <td>
                                                <form action="{{ route('tipodeclaraciones.destroy',$tipodeclaracione->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('tipodeclaraciones.show',$tipodeclaracione->id) }}"><i class="fa fa-fw fa-eye"></i> Ver</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('tipodeclaraciones.edit',$tipodeclaracione->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Eliminar</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $tipodeclaraciones->links() !!}
            </div>
        </div>
    </div>
@endsection
