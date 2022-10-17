@extends('layouts.app')

@section('template_title')
    Codigospostale
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Codigos postales') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('codigospostales.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Crear Nuevo Codigo Postal') }}
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
                                        
										<th>Codigo</th>
										<th>Zona</th>

                                        <th>Opciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($codigospostales as $codigospostale)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $codigospostale->codigo }}</td>
											<td>{{ $codigospostale->zona }}</td>

                                            <td>
                                                <form action="{{ route('codigospostales.destroy',$codigospostale->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('codigospostales.show',$codigospostale->id) }}"><i class="fa fa-fw fa-eye"></i> Ver</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('codigospostales.edit',$codigospostale->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
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
                {!! $codigospostales->links() !!}
            </div>
        </div>
    </div>
@endsection
