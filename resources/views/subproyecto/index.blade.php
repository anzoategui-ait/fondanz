@extends('layouts.app')

@section('template_title')
    Subproyecto
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Proyectos') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('subproyectos.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Crear Nuevo Proyecto') }}
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
                                        
										<th>Nombre del proyecto</th>
										<th>Descripción</th>
										<th>Monto Requerido</th>
										<th>Estado</th>
										<th>Tipo de Proyecto</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($subproyectos as $subproyecto)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $subproyecto->subproyecto_nombre }}</td>
											<td>{{ $subproyecto->subproyecto_descriccion }}</td>
											<td>{{ $subproyecto->subproyecto_monto }}</td>
											<td>{{ $subproyecto->subproyecto_estado }}</td>
											<td>{{ $subproyecto->proyecto->proyecto_nombre }}</td>

                                            <td>
                                                <form action="{{ route('subproyectos.destroy',$subproyecto->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('subproyectos.show',$subproyecto->id) }}"><i class="fa fa-fw fa-eye"></i> Ver</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('subproyectos.edit',$subproyecto->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
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
                {!! $subproyectos->links() !!}
            </div>
        </div>
    </div>
@endsection
