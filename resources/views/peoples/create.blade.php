@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">

                <div class="panel-heading">
                	<b class="sub-header">Nuevo Titular</b>
                	
                </div>
				<br>
				<form method="POST" action="{{ url('/titulares') }}">
					{{ csrf_field() }}
					  <div class="form-group col-md-4">
					    <input type="text" class="form-control" id="first_name" name="first_name" value="{{ old('first_name') }}" aria-describedby="nameHelp" placeholder="Nombre del Titular">
					    <small id="nameHelp" class="form-text text-muted">Nombre del titular</small>
					  </div>
					  <div class="form-group col-md-4">
					    <input type="text" class="form-control" id="last_name" name="last_name" value="{{ old('last_name') }}" aria-describedby="last_nameHelp" placeholder="Apellido del Titular">
					    <small id="nameHelp" class="form-text text-muted">Apellido del titular</small>
					  </div>
					  <div class="form-group col-md-4">
					    <input type="text" class="form-control" id="dni" name="dni" value="{{ old('dni') }}" aria-describedby="dni" placeholder="Cedula del Titular">
					    <small id="nameHelp" class="form-text text-muted">Cedula del titular</small>
					  </div>




					  <div class="form-group col-md-4">
					    <input type="text" class="form-control" id="place_of_birth" name="place_of_birth" value="{{ old('place_of_birth') }}" aria-describedby="place_of_birth" placeholder="Lugar de Nacimiento">
					    <small id="place_of_birthHelp" class="form-text text-muted">Lugar de Nacimiento</small>
					  </div>					  
					  <div class="form-group col-md-4">
					    <input type="date" class="form-control" id="birthdate" name="birthdate" value="{{ old('birthdate') }}" aria-describedby="birthdate" placeholder="Fecha de Nacimiento
					    ">
					    <small id="birthdateHelp" class="form-text text-muted">Fecha de Nacimiento</small>
					  </div>
					  <div class="form-group col-md-4">
					    <select class="form-control" id="gender" name="gender" aria-describedby="genderHelp" >
					      <option>Seleccione el Sexo</option>
					      <option value="1">Femenino</option>
					      <option value="2">Masculino</option>
					    </select>

					    <small id="genderHelp" class="form-text text-muted">Sexo del titular</small>
					  </div>




					  <div class="form-group col-md-4">
					    <input type="text" class="form-control" id="address" name="address" value="{{ old('address') }}" aria-describedby="addressHelp" placeholder="Dirección">
					    <small id="addressHelp" class="form-text text-muted">Dirección del titular</small>
					  </div>
					  <div class="form-group col-md-4">
					    <input type="text" class="form-control" id="email" name="email" value="{{ old('email') }}" aria-describedby="emailHelp" placeholder="Correo Electronico">
					    <small id="emailHelp" class="form-text text-muted">Correo Electronico</small>
					  </div>


					  <div class="form-group col-md-4">
					    <select class="form-control" id="marital_status" name="marital_status" aria-describedby="marital_statusHelp" >
					      <option>Estado Civil</option>
					      <option value="1">Soltero(a)</option>
					      <option value="2">Casado(a)</option>
					      <option value="3">Viudo(a)</option>
					    </select>
					    <small id="marital_statusHelp" class="form-text text-muted">Estado Civil</small>
					  </div>
					  
					  <div class="form-group col-md-4">
					    <input type="text" class="form-control" id="telephone" name="telephone" value="{{ old('email') }}" aria-describedby="telephoneHelp" placeholder="Telefono">
					    <small id="telephoneHelp" class="form-text text-muted">Telefono</small>
					  </div>


					  <div class="form-group col-md-4">
					    <input type="text" class="form-control" id="cellphone" name="cellphone" value="{{ old('email') }}" aria-describedby="cellphoneHelp" placeholder="Telefono Celular">
					    <small id="cellphoneHelp" class="form-text text-muted">Telefono Celular</small>
					  </div>
					  
					  <div class="form-group col-md-4">
					    <select class="form-control" id="employee_type" name="employee_type" aria-describedby="employee_typeHelp" >
					      <option>Tipo de Empleado</option>
					      <option value="1">Administrativo</option>
					      <option value="2">Administrativo-Contratado</option>
					      <option value="3">Docente</option>
					      <option value="4">Docente-Contratado</option>
					      <option value="5">Obrero</option>
					      <option value="6">Obrero-Contratado</option>
					    </select>
					    <small id="employee_typeHelp" class="form-text text-muted">Tipo de Empleado</small>
					  </div>



					  <div class="form-group col-md-4">
					    <input type="date" class="form-control" id="date_of_admission" name="date_of_admission" value="{{ old('date_of_admission') }}" aria-describedby="date_of_admissionHelp" placeholder="Fecha de Ingreso
					    ">
					    <small id="date_of_admissionHelp" class="form-text text-muted">Fecha de Ingreso</small>
					  </div>
					  <div class="form-group col-md-4">
					    <input type="text" class="form-control" id="position" name="position" value="{{ old('position') }}" aria-describedby="positionHelp" placeholder="Cargo">
					    <small id="positionHelp" class="form-text text-muted">Cargo</small>
					  </div>
					  <div class="form-group col-md-4">
					    <select class="form-control" id="status" name="status" aria-describedby="statusHelp" >
					      <option>Estatus del Empleado</option>
					      <option value="1">Activo</option>
					      <option value="2">Jubilado</option>
					      <option value="3">Pensionado</option>
					      <option value="4">Incapacitado</option>
					    </select>
					    <small id="statusHelp" class="form-text text-muted">Estatus del Titular</small>
					  </div>
					  <div class="form-group">
						  <button type="submit" class="btn btn-primary btn-sm">Guardar</button>
						  <a class="btn btn-danger btn-sm" onclick="javascript:history.back();"><i class=""></i>Cancelar</a>
                	  </div>					  

				</form>
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