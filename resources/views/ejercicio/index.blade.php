@extends('layouts.app')

@section('template_title')
    Ejercicio
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Ejercicio') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('ejercicios.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Ejercicio Year</th>
										<th>Ejercicio Unidad Tributaria</th>
										<th>Ejercicio Unidad Minima</th>
										<th>Ejercicio Unidad Maxima</th>
										<th>Ejercicio Cierre</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($ejercicios as $ejercicio)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $ejercicio->ejercicio_year }}</td>
											<td>{{ $ejercicio->ejercicio_unidad_tributaria }}</td>
											<td>{{ $ejercicio->ejercicio_unidad_minima }}</td>
											<td>{{ $ejercicio->ejercicio_unidad_maxima }}</td>
											<td>{{ $ejercicio->ejercicio_cierre }}</td>

                                            <td>
                                                <form action="{{ route('ejercicios.destroy',$ejercicio->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('ejercicios.show',$ejercicio->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('ejercicios.edit',$ejercicio->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
                {!! $ejercicios->links() !!}
            </div>
        </div>
    </div>
@endsection
