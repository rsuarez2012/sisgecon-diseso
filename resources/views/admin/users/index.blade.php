@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12 col-md-offset-0">
            <div class="panel panel-default">

                <div class="panel-heading">
                	<b class="sub-header">Usuarios</b>
                	
                	<!--<button  class="btn btn-primary btn-sm pull-right">Nuevo</button>-->

                </div>
                <div class="panel-body">
                	
					<table id="example" class="table table-hover table-responsive">
						<thead>
							<tr>
								<th>Id</th>
								<th>Usuarios</th>
								<th>Emails</th>
								<th>Accion</th>
							</tr>
						</thead>
						<tbody>
							@foreach ($users as $user)
							<tr>
								<td>
									<label class="label label-info">
										<a href="{{ route('titulares.show', $user->id) }}" title="Ver">
											{{ $user->id }}
										</a>
									</label>
								</td>
								<td>{{	$user->name }}</td>
								<td>{{	$user->email }}</td>								 
								<td>
								 	<!--<a href="{{-- route('titulares.show', $user->id) --}}" class="btn btn-info btn-sm">Ver</a>
								 
								 	<a href="{{-- route('titulares.edit', $user->id) --}}" class="btn btn-success btn-sm">Editar</a>-->

								 	
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