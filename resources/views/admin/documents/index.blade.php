@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12 col-md-offset-0">
            <div class="panel panel-default">

                <div class="panel-heading">
                	<b class="sub-header">Documentos</b>
                	<a class="btn btn-primary btn-sm pull-right" href="{{ route('documentos.create') }}">
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
								
								<th style="text-align: center;" colspan="3">Acciones</th>
							</tr>
						</thead>
						<tbody>	
						@foreach($documents as $document)					
							<tr>
								<td>{{ $document->id }}</td>
								<td>{{ $document->people->dni }}</td>
								<td>{{ $document->people->first_name.' '.$document->people->last_name }}</td>
								<td>{{ $document->people->type_employee }}</td>
								
								<td align="center">
									<!--<a href="{{-- route('documentos.show', $document->id) --}}" class="btn btn-info btn-sm" target="_blank">Ver</a>-->
									
	        							<a href="{{ asset($document->file) }}"class="btn btn-info btn-sm" target="_blank"><i class="material-icons right"></i>Ver planilla</a>
	        						</td>
	        						<td>
										<a href="{{ route('reposos.edit', $document->id) }}" class="btn btn-success btn-sm">Editar</a>
									</td>
	

									{!! Form::open(['route' =>['documentos.destroy',$document],'method' => 'DELETE']) !!} 
										<td><button type="submit" onclick ="return confirm('Seguro desea eliminar la docuentación?')" class="btn btn-danger btn-sm" >Eliminar</button></td>
									{!! Form::close() !!}

									<!--<a href="{{-- route('documentos.destroy', $document->id) --}}" class="btn btn-danger btn-sm" onclick="return confirm('Seguro desea eliminar?')">Eliminar</a>-->
									
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