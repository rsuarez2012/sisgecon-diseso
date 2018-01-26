@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">

                <div class="panel-heading">
                	<b class="sub-header">Titulares</b>
                	<a class="btn btn-primary btn-sm pull-right" href="{{ route('titulares.create') }}">
                        Nuevo
                    </a>
                	<!--<button  class="btn btn-primary btn-sm pull-right">Nuevo</button>-->

                </div>
                <div class="body">
                	<p>Hay un total de: <b>{{ $count }}</b> Registros</p>
					<table class="table table-responsive">
						<thead>
							<tr>
								<th>Id</th>
								<th>Cedula</th>
								<th>Nombre y Apellido</th>
								<th>Tipo de Empleado</th>
								<th>Fecha de Ingreso</th>
								<th>Estatus</th>
								<th>Acciones</th>
							</tr>
						</thead>
						<tbody>
							@foreach ($people as $peopl)
							<tr>
								<td>{{ $peopl->id }}</td>
								 <td>{{	$peopl->dni	}}</td>
								 <td>{{	$peopl->first_name.' '.$peopl->last_name	}}</td>
								 <td>{{	$peopl->employee_type	}}</td>
								 <td>{{ $peopl->date_of_admission }}</td>
								 <td>@if($peopl->status == 1) Activo @elseif ($peopl->status == 2)	Jubilado @elseif($peopl->status == 3)	Pensionado @else($peopl->status == 4) Incapacitado @endif</td>
								 <td><button class="btn btn-info btn-sm">Ver</button> <button class="btn btn-success btn-sm">Editar</button> <button class="btn btn-danger btn-sm">Eliminar</button></td> 				    
								
							</tr>

							@endforeach
						</tbody>
						
					</table>
					<div class="pull-right"> {{ $people->render() }}</div>
                </div>
				
			</div>

		</div>


	</div>
				

</div>

	

	

	
@endsection