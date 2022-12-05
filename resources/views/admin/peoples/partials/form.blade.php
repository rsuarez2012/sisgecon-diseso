	{{ Form::hidden('$people->id') }}
  <div class="form-group col-md-4">
  	{{  Form::select('affiliate', ['' => 'Afiliado', '1' => 'Si', '2' => 'No'], null, ['class' => 'form-control', 'id' => 'affiliate']) }}
    <small id="marital_statusHelp" class="form-text text-muted">Afiliado</small>
  </div>
  <div class="form-group col-md-4">
    {{ Form::text('first_name', null, ['class' => 'form-control', 'id' => 'first_name']) }}
    <small id="nameHelp" class="form-text text-muted">Nombre del afiliado</small>
  </div>
  <div class="form-group col-md-4">
    {{ Form::text('last_name', null, ['class' => 'form-control', 'id' => 'last_name']) }}
    <small id="nameHelp" class="form-text text-muted">Apellido del afiliado</small>
  </div>
  <div class="form-group col-md-4">
    {{ Form::text('dni', null, ['class' => 'form-control', 'id' => 'dni']) }}
    <small id="nameHelp" class="form-text text-muted">Cedula del afiliado</small>
  </div>




  <div class="form-group col-md-4">
    {{ Form::text('place_of_birth', null, ['class' => 'form-control', 'id' => 'place_of_birth']) }}
    <small id="place_of_birthHelp" class="form-text text-muted">Lugar de Nacimiento</small>
  </div>					  
  <div class="form-group col-md-4">
    {{ Form::text('birthdate', null, ['class' => 'form-control', 'id' => 'birthdate']) }}
    <small id="birthdateHelp" class="form-text text-muted">Fecha de Nacimiento</small>
  </div>
  <div class="form-group col-md-4">
  	{{  Form::select('gender', ['1' => 'Femenino', '2' => 'Masculino'], null, ['class' => 'form-control', 'id' => 'gender']) }}

    <small id="genderHelp" class="form-text text-muted">Sexo del afiliado</small>
  </div>




  <div class="form-group col-md-4">
    {{ Form::text('address', null, ['class' => 'form-control', 'id' => 'address']) }}
    <small id="addressHelp" class="form-text text-muted">Dirección del afiliado</small>
  </div>
  <div class="form-group col-md-4">
    {{ Form::text('email', null, ['class' => 'form-control', 'id' => 'email']) }}
    <small id="emailHelp" class="form-text text-muted">Correo Electronico</small>
  </div>


  <div class="form-group col-md-4">
  	{{  Form::select('marital_status', ['1' => 'Soltero(a)', '2' => 'Casado(a)', '3' => 'Viudo(a)'], null, ['class' => 'form-control', 'id' => 'marital_status']) }}
    <small id="marital_statusHelp" class="form-text text-muted">Estado Civil</small>
  </div>
  
  <div class="form-group col-md-4">
    {{ Form::text('telephone', null, ['class' => 'form-control', 'id' => 'telephone']) }}
    <small id="telephoneHelp" class="form-text text-muted">Telefono</small>
  </div>


  <div class="form-group col-md-4">
    {{ Form::text('cellphone', null, ['class' => 'form-control', 'id' => 'cellphone']) }}
    <small id="cellphoneHelp" class="form-text text-muted">Telefono Celular</small>
  </div>
  
  <div class="form-group col-md-4">
  	{{  Form::select('employee_type', ['1' => 'Administrativo', '2' => 'Administrativo-Contratado', '3' => 'Docente', '4' => 'Docente-Contratado', '5' => 'Obrero', '6' => 'Obrero-Contratado'], null, ['class' => 'form-control', 'id' => 'employee_type']) }}
    <small id="employee_typeHelp" class="form-text text-muted">Tipo de Empleado</small>
  </div>



  <div class="form-group col-md-4">
    {{ Form::text('date_of_admission', null, ['class' => 'form-control', 'id' => 'date_of_admission']) }}
    <small id="date_of_admissionHelp" class="form-text text-muted">Fecha de Ingreso</small>
  </div>
  <div class="form-group col-md-4">
    {{ Form::text('position', null, ['class' => 'form-control', 'id' => 'position']) }}
    <small id="positionHelp" class="form-text text-muted">Cargo</small>
  </div>
  <div class="form-group col-md-6">
  	{{  Form::select('status', ['1' => 'Activo', '2' => 'Jubilado', '3' => 'Pensionado', '4' => 'Incapacitado'], null, ['class' => 'form-control', 'id' => 'marital_status']) }}
    <small id="statusHelp" class="form-text text-muted">Estatus del afiliado</small>
  </div>
  <div class="form-group col-md-6">
    {{-- Form::label('people_id', 'afiliado') --}}
    {{ Form::select('dependency_id', $dependencies, null, ['class' => 'form-control']) }}
    <small id="statusHelp" class="form-text text-muted">Dependencia a la que pertenece el afiliado</small>
  </div>
  <div class="form-group">
	  {{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']) }}
	  <a class="btn btn-danger btn-sm" onclick="javascript:history.back();"><i class=""></i>Cancelar</a>
  </div>