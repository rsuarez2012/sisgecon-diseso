@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12 col-md-offset-0">
            <div class="panel panel-default">

                <div class="panel-heading">
                	<b class="sub-header">Reposos</b>
                	<a class="btn btn-primary btn-sm pull-right" href="{{ route('reposos.create') }}">
                        Nuevo
                    </a>
                </div>
                <div class="panel-body">
                	
            		<table class="table">
						<thead>
							<tr>
								<th>Id</th>
								<th>Cedula</th>
								<th>Nombre y Apellido</th>
								<th>Tipo de Empleado</th>
								<th>Fecha del Reposo</th>
								<th style="text-align: center;">Acciones</th>
							</tr>
						</thead>
						<tbody>	
						@foreach($reposes as $repose)					
							<tr>
								<td>{{ $repose->id }}</td>
								<td>{{ $repose->people->dni }}</td>
								<td>{{ $repose->people->first_name.' '.$repose->people->last_name }}</td>
								<td>{{ $repose->people->type_employee }}</td>
								<td>{{ Carbon\Carbon::parse($repose->date)->format('d-m-Y') }}</td> 
								<td align="center">
									<a href="{{ route('reposos.show', $repose->id) }}" class="btn btn-info btn-sm">Ver</a>
									<a href="{{ route('reposos.edit', $repose->id) }}" class="btn btn-success btn-sm">Editar</a>
									<a href="{{ route('reposos.destroy', $repose->id) }}" class="btn btn-danger btn-sm">Eliminar</a>
								</td>
							</tr>
						@endforeach							
						</tbody>
						
					</table>						
                </div>
				
			</div>

		</div>


	</div>
				

</div>
@endsection