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
                	
            		<table id="example" class="table table-hover table-responsive">
						<thead>
							<tr>
								<th>Id</th>
								<th>Titular</th>
								<th>Beneficiario</th>
								<th>Cedula</th>
								<th>Fecha de Nacimiento</th>
								<th>Accion</th>
							</tr>
						</thead>
						<tbody>	
							@foreach ($beneficiaries as $beneficiary)
							<tr>
								 <td>
								 	<label class="label label-info">
								 		<a href="{{ route('beneficiarios.show', $beneficiary->id) }}" title="Ver">
								 			{{ $beneficiary->id }}
								 		</a> 
								 	</label>
								 </td>
								 <td>
								 	{{	$beneficiary->people->full_name	}}
								 </td>
								 <td>
								 	<label class="label label-warning">
								 		<a href="{{ route('beneficiarios.edit', $beneficiary->id) }}" title="Editar">
								 			{{	$beneficiary->first_name.' '.$beneficiary->last_name }}
								 		</a>
								 	</label>
								 </td>
								 <td>{{	$beneficiary->dni }}</td>
								 <td>{{ Carbon\Carbon::parse($beneficiary->birthdate)->format('d-m-Y') }}</td>
								 <!--<td>
								 	<a href="{{-- route('beneficiarios.show', $beneficiary->id) --}}" class="btn btn-info btn-sm">Ver</a>		 
								 	<a href="{{-- route('beneficiarios.edit', $beneficiary->id) --}}" class="btn btn-success btn-sm">Editar</a>
								 	
								 </td>-->
								 <td>
								 	@include('admin.beneficiaries.partials.delete')
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