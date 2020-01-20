@extends('layouts.app')
@section('content')
<!--Seccion del Calendario-->
<div id='calendar2'></div>
<!-- calendar modal -->
    <div id="CalenderModalNew" class="modal fade" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">

          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h4 class="modal-title" id="myModalLabel">Cita Medica</h4>
          </div>
          <div class="modal-body">
            <div id="testmodal" style="padding: 5px 20px;">
            	{!! Form::open(['route' => ['citas.store'], 'files' => true]) !!}
              
              	<input type="hidden" id="id" name="id" value="">
              	<input type="hidden" id="appointment" name="appointment" value="">
              	 
                @include('admin.appointments.partials.form')
              
              {!! Form::close() !!}
            </div>
          </div>
        </div>
      </div>
    </div>
    <div id="CalenderModalEdit" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">

          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h4 class="modal-title" id="myModalLabel2">Ver Cita</h4>
          </div>
          <div class="modal-body">

            <div id="testmodal2" style="padding: 5px 20px;">
              <form id="antoform2" class="form-horizontal calender" role="form">
                <div class="form-group">    
                	<label class="col-sm-3 control-label">Titular</label>
				    <div class="col-sm-9">
						<input type="text" class="form-control" id="title" name="people_id" readOnly="true">
					</div>
					
				</div>
				<div class="form-group">
				    <label class="col-sm-3 control-label">Beneficiario</label>
				    <div class="col-sm-9">
				        <input type="text" class="form-control" id="beneficiary" name="beneficiary_id" readonly="true">
				    </div>
				</div>
				<div class="form-group">
				    <label class="col-md-3 control-label">Especialista</label>
			        <div class="col-md-9">
				        <div class="speciality_id form-control"></div>
			        </div>
				</div>

              </form>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default antoclose2" data-dismiss="modal">Cerrar</button>
            <button type="button" class="btn btn-primary antosubmit2">Guardar</button>
          </div>
        </div>
      </div>
    </div>

    <div id="fc_create" data-toggle="modal" data-target="#CalenderModalNew"></div>
    <!--<div id="fc_create" data-toggle="modal" data-target=".bs-example-modal-lg"></div>-->
    
    <div id="fc_edit" data-toggle="modal" data-target="#CalenderModalEdit"></div>
    <!-- /calendar modal -->

@endsection
@section('scripts')
<script type="text/javascript">
$(document).ready(function(){
	var protocol = $(location).attr('protocol');
    var url = $(location).attr('host');
    var full_url = protocol + '//' + url;
    /*** allow ajax requests  ***/
    $.ajaxSetup({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    });
    $('.people').select2({
    	width:'100%',

    });
    $('.beneficiary').select2({
    	width:'100%',

    });
    $('.specialists').select2({
    	width:'100%',

    });
    $('.people').on('change', function(e) {
		/* Act on the event */
		console.log(e);
		var people_id = e.target.value;
		//alert(people_id);
		$.get('/json-beneficiaries?people_id=' + people_id,function(data){
			console.log(data);
			$('#beneficiary_id').empty();
			$('#beneficiary_id').append('<option value="0" disabled="true" selected="true">===Seleccione el Beneficiario===</option>');

			$.each(data, function(index, beneficiariesObj){
				//alert(beneficiariesObj.first_name);
				$('#beneficiary_id').append('<option value="'+ beneficiariesObj.id +'">'+ beneficiariesObj.first_name + ' ' + beneficiariesObj.last_name +'</option>');				
			})
		});
	});
	$('#calendar2').fullCalendar({
		//cabezera del calendario
		header:{
			left: 'prev, next, today',
			center: 'title',
			right: 'month, listMonth, agendaWeek, agendaDay'

		},
		buttonText:{
			today: 'Hoy',
			month: 'Mes',
			week:  'Semana',
			day:   'Dia',
			listMonth: 'Lista del Mes'

		},
		monthNames:['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
		dayNames:['Domingo', 'Lunes', 'Martes', 'Miercoles', 'Jueves', 'Viernes', 'Sabado'],
		dayNamesShort:['Dom', 'Lun', 'Mar', 'Mie', 'Jue', 'Vie', 'Sab'],
		//events: { url:'/appointments'},
		editable: true,
		events : [
	                @foreach($appointments as $appointment)
	                {
	                	id:'{{ $appointment->id }}',
	                    title : '{{ $appointment->people->full_name }}',
	                    start : '{{ $appointment->appointment }}',
	                    beneficiary_id:'@if(isset($appointment->beneficiary->full_name)){{ ($appointment->beneficiary->full_name) }}@endif',
	                    speciality_id: '{{ $appointment->user->full_specialist }}'
	                    //description: '{{--$appointment->beneficiary->first_name.' '.$appointment->beneficiary->last_name--}}',
	                    
	                },
	                @endforeach
	            ],
	    /*events: function(callback){
	    	$.ajax({
	    		url: full_url + '/citas/show',
	    		type: 'GET',
	    		dataType: 'json',
	    		success:function(data){
	    			callback(data);
	    		}
	    	})
	    	
	    },*/
	    dayClick: function(date, jsEvent, view){
	    	var da =date.format();
	    	//
	    	//
	    	//limpiarFormulario();
	    	//$('#title').val();
	    	//$('#beneficiary_id').val();
	    	//$('#speciality_id').val();
	    	limpiarFormulario();
	    	$('#appointment').val(da);
	    	$('#CalenderModalNew').modal();
	    },
	    eventClick:function(calEvent, jsEvent, title){
	    	//id del titular
	    	//alert(calEvent.speciality_id + ' ' + calEvent.title );
	    	$('#id').val(calEvent.id);
	    	//mostrar informacion de la cita en el modal
	    	$('#title').val(calEvent.title);
	    	$('#appointment').val(calEvent.start);
	    	$('#beneficiary').val(calEvent.beneficiary_id);
	    	$('.speciality_id').html(calEvent.speciality_id);
	    	$('#CalenderModalEdit').modal();
	    },
	});
});	

//funciones a realizar
//
//
var nuevaCita;
$('#btnAgregar').click(function(){
	RecolectarDatosGUI();
	guardarCita('agregar', nuevaCita);
});

function RecolectarDatosGUI(){
	/*nuevaCita = {
		id:$('#id').val();
		//mostrar informacion de la cita en el modal
		people_id:$('#title').val();
		appointment:$('#start').val();
		beneficiary_id:$('#beneficiary_id').val();
		speciality_id:$('#specialist_id').val();

	};*/
}
//funcion guardar cita
//
function guardarCita(accion, objEvento, modal){
	/*$.ajax({
		type: 'POST',
		url: //definir el metodo store en el controlador
		data:objEvento,
		success:function (msg) {
			// body...
			if(msg){
				$('#calendar2').fullCalendar(refetchEvents);
				if(!modal){
					$('#CalenderModalNew').modal('toggle');
				}
			}
		},
		error:function() {
			// body...
			alert('Hay Un error');
		}
	});*/
}
//
//limpiar el formulario en un dia
function limpiarFormulario(){
	$('#id').val('');
	//mostrar informacion de la cita en el modal
	$('#people_id').val('');
	$('#appointment').val('');
	$('#beneficiary_id').val('');
	$('#speciality_id').val('');

}

</script>
@endsection