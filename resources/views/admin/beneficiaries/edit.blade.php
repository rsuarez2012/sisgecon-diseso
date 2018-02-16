@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12 col-md-offset-0">
            <div class="panel panel-default">

                <div class="panel-heading">
                	<b class="sub-header">Editar Beneficiario</b>
                	
                </div>
				<br>
				<div class="panel-body">
                    {!! Form::model($beneficiary, ['route' => ['beneficiarios.update', $beneficiary->id], 'method' => 'PUT'])!!}
					<input type="hidden" name="id" value="{{-- $person->id --}}">

                        <div class="form-group col-md-12">
                          {{ Form::label('people_id', 'Titular') }}
                          {{ Form::select('people_id', $peoples, null, ['class' => 'form-control']) }}
                        </div>                       
                        @include('admin.beneficiaries.partials.form')


                    {!! Form::close() !!}
				</div>
				
				
			</div>

		</div>


	</div>
				

</div>




@endsection
@section('scripts')
<script type="text/javascript">
$(document).ready(function(){
	$.fn.datepicker.dates['es'] = {
        days: ["Domingo", "Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábado", "Domingo"],
        daysShort: ["Dom", "Lun", "Mar", "Mié", "Jue", "Vie", "Sáb", "Dom"],
        daysMin: ["Do", "Lu", "Ma", "Mi", "Ju", "Vi", "Sa", "Do"],
        months: ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"],
        monthsShort: ["Ene", "Feb", "Mar", "Abr", "May", "Jun", "Jul", "Ago", "Sep", "Oct", "Nov", "Dic"],
        today: "Hoy"
    };
	$('#birthdate').datepicker({
      language: "es",
      format: "yyyy-mm-dd",
      weekStart:0,
      todayHighlight: true,
      todayBtn:true,
      orientation: "bottom right",
     
    });
    $('#date_of_admission').datepicker({
      language: "es",
      format: "yyyy-mm-dd",
      weekStart:0,
      todayHighlight: true,
      todayBtn:true,
      orientation: "bottom right",
     
    });
});
</script>

@endsection