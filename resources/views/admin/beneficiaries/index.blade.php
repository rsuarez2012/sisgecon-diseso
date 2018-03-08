@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12 col-md-offset-0">
            <div class="panel panel-default">

                <div class="panel-heading">
                	<b class="sub-header">Beneficiarios</b>
                	<a class="btn btn-primary btn-sm pull-right" href="{{ route('beneficiarios.create') }}">
                        Nuevo
                    </a>
                	<!--<button  class="btn btn-primary btn-sm pull-right">Nuevo</button>-->

                </div>
                <div class="body">
                	<p>Hay un total de: <b>{{-- $count --}}</b> Registros</p>
					<table class="table table-responsive">
						<thead>
							<tr>
								<th>Id</th>
								<th>Titular</th>
								<th>Beneficiario</th>
								<th>Cedula</th>
								<th>Fecha de Nacimiento</th>
								<th colspan="3">Acciones</th>
							</tr>
						</thead>
						<tbody>
							@foreach ($beneficiaries as $beneficiary)
							<tr>
								 <td>{{ $beneficiary->id }}</td>
								 <td>{{	$beneficiary->people->full_name	}}</td>
								 <td>{{	$beneficiary->first_name.' '.$beneficiary->last_name }}</td>
								 <td>{{	$beneficiary->dni }}</td>
								 <td>{{ Carbon\Carbon::parse($beneficiary->birthdate)->format('d-m-Y') }}</td>
								 <td>
								 	<a href="{{ route('beneficiarios.show', $beneficiary->id) }}" class="btn btn-info btn-sm">Ver</a>
								 </td>
								 <td>
								 	<a href="{{ route('beneficiarios.edit', $beneficiary->id) }}" class="btn btn-success btn-sm">Editar</a>
								 </td>
								 <td>								 	
								 	{!! Form::open(['route'=>['beneficiarios.destroy', $beneficiary->id], 'method'=> 'DELETE']) !!}
							 			<button class="btn btn-danger btn-sm">Eliminar</button>

								 	{!! Form::close() !!}
								 </td> 				    
								
							</tr>

							@endforeach
						</tbody>
						
					</table>
					<div class="pull-right"> {{ $beneficiaries->render() }}</div>
                </div>
				
			</div>

		</div>


	</div>
				

</div>

	

	

	
@endsection