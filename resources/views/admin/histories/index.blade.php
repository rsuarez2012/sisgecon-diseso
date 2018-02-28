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
								<th>Dependencia</th>
								<th>Acciones</th>
							</tr>
						</thead>
						<tbody>	
										
							<tr>
								<td></td>
								<td></td> 
								<td></td>
							</tr>
													
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