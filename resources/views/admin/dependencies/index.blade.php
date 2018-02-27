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
                	<!--<button  class="btn btn-primary btn-sm pull-right">Nuevo</button>-->

                </div>
                <div class="body">
                	
            		<table class="table">
						<thead>
							<tr>
								<th>Id</th>
								<th>Dependencia</th>
								<th>Acciones</th>
							</tr>
						</thead>
						<tbody>	
						@foreach($dependencies as $dependency)					
							<tr>
								<td>{{ $dependency->id }}</td>
								<td>{{ $dependency->dependency }}</td> 
								<td></td>
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