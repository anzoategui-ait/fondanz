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
                                {{ __('Subproyecto') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('subproyectos.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
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
                                        
										<th>Subproyecto Nombre</th>
										<th>Subproyecto Descriccion</th>
										<th>Subproyecto Monto</th>
										<th>Subproyecto Estado</th>
										<th>Proyecto Id</th>

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
											<td>{{ $subproyecto->proyecto_id }}</td>

                                            <td>
                                                <form action="{{ route('subproyectos.destroy',$subproyecto->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('subproyectos.show',$subproyecto->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('subproyectos.edit',$subproyecto->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button>
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
