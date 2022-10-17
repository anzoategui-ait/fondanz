@extends('layouts.app')

@section('template_title')
    Subsectore
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Sub Sectores') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('subsectores.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Crear Nuevo Sub Sector') }}
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
                                        
										<th>Nombre del Sub Sector</th>
										<th>Sector</th>

                                        <th>Opciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($subsectores as $subsectore)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $subsectore->nombre }}</td>
											<td>{{ $subsectore->sectore->nombre }}</td>

                                            <td>
                                                <form action="{{ route('subsectores.destroy',$subsectore->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('subsectores.show',$subsectore->id) }}"><i class="fa fa-fw fa-eye"></i> Ver</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('subsectores.edit',$subsectore->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
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
                {!! $subsectores->links() !!}
            </div>
        </div>
    </div>
@endsection
