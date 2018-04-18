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
								<td></td>
								<td></td>
								<td></td>
								<td align="center">{{ $repose->id }}</td>
								<td align="center">{{ $repose->repose }}</td> 
								<td align="center">
									<a href="{{ route('dependencias.show', $repose->id) }}" class="btn btn-info btn-sm">Ver</a>
									<a href="{{ route('dependencias.edit', $repose->id) }}" class="btn btn-success btn-sm">Editar</a>
									<a href="{{ route('dependencias.destroy', $repose->id) }}" class="btn btn-danger btn-sm">Eliminar</a>
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