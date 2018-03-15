@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12 col-md-offset-0">
            <div class="panel panel-default">

                <div class="panel-heading">
                	<b class="sub-header">Historia Medica Ocupacional</b>
                	<a class="btn btn-primary btn-sm pull-right" href="{{ route('historia_ocupacional.create') }}">
                        Nueva
                    </a>
                </div>
                <div class="panel-body">
                	
            		<table id="example" class="display">
						<thead>
							<tr>
								<th>Id</th>
								<th>Numero de Historia</th>
								<th>Titular</th>
								<th>Dependencia</th>
								<th>Acciones</th>
							</tr>
						</thead>
						<tbody>	
							@foreach($occupatinals as $occupational)
							<tr>
								<td>{{ $occupational->id }}</td>
								<td>{{ $occupational->people->history }}</td>
								<td>{{ $occupational->people->full_name }}</td> 
								<td>{{ $occupational->people->dependencies->info }}</td>								
								<td>
									<a href="{{ route('historia_ocupacional.show', $occupational->id) }}" class="btn btn-info btn-sm">Ver</a>
									<a href="{{route('historia_ocupacional.edit', $occupational->id) }}" class="btn btn-success btn-sm">Editar</a>
									<a href="{{-- route('historia_ocupacional.destroy') --}}" class="btn btn-danger btn-sm">Editar</a>
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