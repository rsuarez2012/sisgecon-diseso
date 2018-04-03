@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12 col-md-offset-0">
            <div class="panel panel-default">

                <div class="panel-heading">
                	<b class="sub-header">Titulares</b>
                	<a class="btn btn-primary btn-sm pull-right" href="{{ route('titulares.create') }}">
                        Nuevo
                    </a>
                	<!--<button  class="btn btn-primary btn-sm pull-right">Nuevo</button>-->

                </div>
                <div class="panel-body">
                	
					<table id="example" class="table table-hover table-responsive">
						<thead>
							<tr>
								<th>Id</th>
								<th>Cedula</th>
								<th>Nombre y Apellido</th>
								<th>Tipo de Empleado</th>
								<th>Fecha de Ingreso</th>
								<th>Accion</th>
							</tr>
						</thead>
						<tbody>
							@foreach ($people as $peopl)
							<tr>
								<td>
									<label class="label label-info">
										<a href="{{ route('titulares.show', $peopl->id) }}" title="Ver">
											{{ $peopl->id }}
										</a>
									</label>
								</td>
								 <td>
								 	<label class="label label-warning">
								 		<a href="{{ route('titulares.edit', $peopl->id) }}" title="Editar">
								 			{{	$peopl->dni	}}
								 		</a>
								 	</label>								 	
								 </td>
								 <td>{{	$peopl->first_name.' '.$peopl->last_name	}}</td>
								 <td>{{	$peopl->type_employee	}}</td>
								 <td>{{ Carbon\Carbon::parse($peopl->date_of_admission)->format('d-m-Y') }}</td>
								 <td>
								 	<!--<a href="{{-- route('titulares.show', $peopl->id) --}}" class="btn btn-info btn-sm">Ver</a>
								 
								 	<a href="{{-- route('titulares.edit', $peopl->id) --}}" class="btn btn-success btn-sm">Editar</a>-->

								 	@include('admin.peoples.partials.delete')
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