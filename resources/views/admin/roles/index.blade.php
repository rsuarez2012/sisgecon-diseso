@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12 col-md-offset-0">
            <div class="panel panel-default">

                <div class="panel-heading">
                	<b class="sub-header">Roles</b>
                </div>
                <div class="panel-body">
                	
            		<table class="table">
						<thead>
							<tr>
								<th style="text-align: center;">Id</th>
								<th style="text-align: center;">Nombre</th>
								<th style="text-align: center;">Descripcion</th>
								<th style="text-align: center;">Acciones</th>
							</tr>
						</thead>
						<tbody>	
						@foreach($roles as $rol)					
							<tr>
								<td align="center">{{ $rol->id }}</td>
								<td align="center">{{ $rol->name }}</td> 
								<td align="center">{{ $rol->description }}</td> 
								<td align="center">
									<a href="{{ route('roles.show', $rol->id) }}" class="btn btn-info btn-sm">Ver</a>
									<a href="{{ route('roles.edit', $rol->id) }}" class="btn btn-success btn-sm">Editar</a>
									<a href="{{ route('roles.destroy', $rol->id) }}" class="btn btn-danger btn-sm">Eliminar</a>
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