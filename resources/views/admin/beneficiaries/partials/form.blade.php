  <div class="form-group col-md-12">
    {{ Form::label('people_id', 'Titular') }}
    {{ Form::select('people_id', $peoples, null, ['class' => 'form-control']) }}
  </div>
  <div class="form-group col-md-4">
    {{ Form::text('first_name', null, ['class' => 'form-control', 'id' => 'first_name']) }}
    <small id="nameHelp" class="form-text text-muted">Nombre del beneficiario</small>
  </div>
  <div class="form-group col-md-4">
    {{ Form::text('last_name', null, ['class' => 'form-control', 'id' => 'last_name']) }}
    <small id="nameHelp" class="form-text text-muted">Apellido del beneficiario</small>
  </div>
  <div class="form-group col-md-4">
    {{ Form::text('dni', null, ['class' => 'form-control', 'id' => 'dni']) }}
    <small id="nameHelp" class="form-text text-muted">Cedula (Si N/T C.I Titular-1....)</small>
  </div>

				  
  <div class="form-group col-md-4">
    {{ Form::text('birthdate', null, ['class' => 'form-control', 'id' => 'birthdate']) }}
    <small id="birthdateHelp" class="form-text text-muted">Fecha de Nacimiento</small>
  </div>

  <div class="form-group col-md-4">
  	{{  Form::select('gender', ['1' => 'Femenino', '2' => 'Masculino'], null, ['class' => 'form-control', 'id' => 'gender']) }}
    <small id="genderHelp" class="form-text text-muted">Sexo del beneficiario</small>
  </div>


  <div class="form-group col-md-4">
  	{{  Form::select('relationship', ['1' => 'Madre', '2' => 'Padre', '3' => 'Hijo(a)', '4' => 'Conyuge', '5' => 'Otros'], null, ['class' => 'form-control', 'id' => 'relationship']) }}
    <small id="marital_statusHelp" class="form-text text-muted">Estado Civil</small>
  </div>
  
   <div class="form-group">
	  {{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']) }}
	  <a class="btn btn-danger btn-sm" onclick="javascript:history.back();"><i class=""></i>Cancelar</a>
  </div>