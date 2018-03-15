@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12 col-md-offset-0">
            <div class="panel panel-default">

                <div class="panel-heading">
                	<b class="sub-header">Beneficiarios</b>              	
                </div>
                <div class="panel-body">
                	
            		<table class="table">
						<thead>
							<tr>
								<th>Id</th>
								<th>Titular</th>
								<th>Beneficiario</th>
								<th>Cedula</th>
								<th>Fecha de Nacimiento</th>
								<th>Acciones</th>
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
								 	<a href="{{ route('beneficiarios.edit', $beneficiary->id) }}" class="btn btn-success btn-sm">Editar</a>
								 	<a href="{{ route('beneficiarios.destroy', $beneficiary->id) }}" class="btn btn-danger btn-sm">Eliminar</a>
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