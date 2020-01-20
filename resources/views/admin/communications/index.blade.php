@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12 col-md-offset-0">
            <div class="panel panel-default">

                <div class="panel-heading">
                	<b class="sub-header">Reposos</b>
                	<a class="btn btn-primary btn-xs pull-right" href="{{ route('memorando.create') }}">
                        Nuevo
                    </a>
                </div>
                <div class="panel-body">
                	
            		<table class="table">
						<thead>
							<tr>
								<th>Id</th>
								<th>Dependencia</th>
								<th>Asunto</th>
								<th>Fecha</th>
								<th>Tipo de Comunicación</th>
								<th>N° de Comunicación</th>
								<th style="text-align: center;">Acciones</th>
							</tr>
						</thead>
						<tbody>	
						@foreach($reposes as $repose)					
							<tr>
								<td></td>
								<td>{{ $repose->id }}</td>
								<td>{{ $repose->people->dni }}</td>
								<td>{{ $repose->people->first_name.' '.$repose->people->last_name }}</td>
								<td>{{ $repose->people->type_employee }}</td>
								<td>{{ Carbon\Carbon::parse($repose->date)->format('d-m-Y') }}</td> 
								<td align="center">
									<a href="{{ route('memorandos.show', $repose->id) }}" class="btn btn-info btn-xs">Ver</a>
									<a href="{{ route('reposos.edit', $repose->id) }}" class="btn btn-success btn-xs">Editar</a>
									
									<a href="{{ url('/reposos/'.$repose->id.'/eliminar') }}" class="btn btn-danger btn-xs" onclick="return confirm('Seguro desea eliminar?')">Eliminar</a>
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