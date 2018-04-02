@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12 col-md-offset-0">
            <div class="panel panel-default">

                <div class="panel-heading">
                	<b class="sub-header">Dependencias</b>
                	<a class="btn btn-primary btn-sm pull-right" href="{{ route('dependencias.create') }}">
                        Nuevo
                    </a>
                </div>
                <div class="panel-body">
                	
            		<table class="table">
						<thead>
							<tr>
								<th style="text-align: center;">Id</th>
								<th style="text-align: center;">Dependencia</th>
								<th style="text-align: center;">Acciones</th>
							</tr>
						</thead>
						<tbody>	
						@foreach($dependencies as $dependency)					
							<tr>
								<td align="center">{{ $dependency->id }}</td>
								<td align="center">{{ $dependency->dependency }}</td> 
								<td align="center">
									<a href="{{ route('dependencias.show', $dependency->id) }}" class="btn btn-info btn-sm">Ver</a>
									<a href="{{ route('dependencias.edit', $dependency->id) }}" class="btn btn-success btn-sm">Editar</a>
									<a href="{{ route('dependencias.destroy', $dependency->id) }}" class="btn btn-danger btn-sm">Eliminar</a>
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