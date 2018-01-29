	<input type="hidden" name="id" value="{{-- $person->id --}}">
	{{ Form::hidden('$person->id') }}
  <div class="form-group col-md-4">
    {{ Form::text('first_name', null, ['class' => 'form-control', 'id' => 'first_name']) }}
    <small id="nameHelp" class="form-text text-muted">Nombre del titular</small>
  </div>
  <div class="form-group col-md-4">
    {{ Form::text('last_name', null, ['class' => 'form-control', 'id' => 'last_name']) }}
    <small id="nameHelp" class="form-text text-muted">Apellido del titular</small>
  </div>
  <div class="form-group col-md-4">
    {{ Form::text('dni', null, ['class' => 'form-control', 'id' => 'dni']) }}
    <small id="nameHelp" class="form-text text-muted">Cedula del titular</small>
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
    <select class="form-control" id="gender" name="gender" aria-describedby="genderHelp" >
      <option>Seleccione el Sexo</option>
      <option value="1">Femenino</option>
      <option value="2">Masculino</option>
    </select>

    <small id="genderHelp" class="form-text text-muted">Sexo del titular</small>
  </div>




  <div class="form-group col-md-4">
    {{ Form::text('address', null, ['class' => 'form-control', 'id' => 'address']) }}
    <small id="addressHelp" class="form-text text-muted">Dirección del titular</small>
  </div>
  <div class="form-group col-md-4">
    {{ Form::text('email', null, ['class' => 'form-control', 'id' => 'email']) }}
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
    {{ Form::text('telephone', null, ['class' => 'form-control', 'id' => 'telephone']) }}
    <small id="telephoneHelp" class="form-text text-muted">Telefono</small>
  </div>


  <div class="form-group col-md-4">
    {{ Form::text('cellphone', null, ['class' => 'form-control', 'id' => 'cellphone']) }}
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
    {{ Form::text('date_of_admission', null, ['class' => 'form-control', 'id' => 'date_of_admission']) }}
    <small id="date_of_admissionHelp" class="form-text text-muted">Fecha de Ingreso</small>
  </div>
  <div class="form-group col-md-4">
    {{ Form::text('position', null, ['class' => 'form-control', 'id' => 'position']) }}
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
	  {{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']) }}
	  <a class="btn btn-danger btn-sm" onclick="javascript:history.back();"><i class=""></i>Cancelar</a>
  </div>