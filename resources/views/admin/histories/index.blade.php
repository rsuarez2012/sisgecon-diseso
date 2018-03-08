@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12 col-md-offset-0">
            <div class="panel panel-default">

                <div class="panel-heading">
                	<b class="sub-header">Historias Medicas</b>
                	<a class="btn btn-primary btn-sm pull-right" href="{{ route('historias.create') }}">
                        Nuevo
                    </a>
                	<!--<button  class="btn btn-primary btn-sm pull-right">Nuevo</button>-->

                </div>
                <div class="panel-body">
                	
            		<table class="table">
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
							@foreach($histories as $history)			
							<tr>
								<td>{{ $history->id }}</td>
								<td>{{ $history->people->history }}</td>
								<td>{{ $history->people->full_name }}</td> 
								<td>{{ $history->people->dependencies->info }}</td>								
								<td>
									<a href="{{ route('historias.show', $history->id) }}" class="btn btn-info btn-sm">Ver</a>
									<a href="{{ route('historias.edit', $history->id) }}" class="btn btn-success btn-sm">Editar</a>
									<a href="{{ route('historias.destroy', $history->id) }}" class="btn btn-danger btn-sm">Editar</a>
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
@section('scripts')
<script type="text/javascript">
$(document).ready(function(){
  $('.table').DataTable();
});
</script>
@endsection