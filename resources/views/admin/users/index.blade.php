@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12 col-md-offset-0">
            <div class="panel panel-default">

                <div class="panel-heading">
                	<b class="sub-header">Usuarios</b>
                	
                	<button type="button" class="btn btn-primary btn-sm pull-right" data-toggle="modal" data-target=".bs-example-modal-lg">Nuevo Usuario</button>
                	<!--<button class="btn btn-primary btn-lg" type="button" data-toggle="modal" data-target="#abrirmodal">
                            <i class="fa fa-plus fa-2x"></i>&nbsp;&nbsp;Agregar Usuario
                        </button>-->

                </div>
                <div class="panel-body">
                	
					<table id="example" class="table table-hover table-responsive">
						<thead>
							<tr>
								<th>Id</th>
								<th>Usuarios</th>
								<th>Emails</th>
								<th>Avatar</th>
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

									 <img src="{{asset('/expedientes/usuarios/'.$user->image)}}" id="imagen1" alt="{{$user->email}}" class="img-responsive" width="100px" height="100px">
									
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
<!--Inicio del modal agregar-->
<!--modal-->

          <!-- modals -->
          <!-- Large modal -->
          

          <div class="modal fade bs-example-modal-lg" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">

                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                  </button>
                  <h4 class="modal-title" id="myModalLabel">Nuevo Usuario</h4>
                </div>
               
                <div class="modal-body">
                	{!! Form::open(['route' => ['usuarios.store'], 'files' => true]) !!}                    
                     
                        @include('admin.users.partials.form')
                    {!! Form::close() !!}

                </div>
                
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!--Fin del modal-->

@endsection
@section("scripts")
<script type="text/javascript">
$(document).ready(function(){
	$('.roles').select2({
    	width:'100%',

    });
	$('#rol_id').on('change', function () {
		var rol_id = $('#rol_id option:selected').val();
		console.log(rol_id);
		if(rol_id == 4){
			if($('#especialidad').css('display') == 'none')
				$('#especialidad').css('display', 'block');
		}
		else{
			if($('#especialidad').css('display') == 'block')
				$('#especialidad').css('display', 'none');
		}
	})
	
});
</script>
@endsection