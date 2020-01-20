  <br />
  <div class="form-group col-md-4">
    {{ Form::text('first_name', null, ['class' => 'form-control', 'id' => 'first_name', 'required pattern' => '^[a-zA-Z_áéíóúñ\s]{0,30}$']) }}
    <small id="nameHelp" class="form-text text-muted">Nombre del Usuario</small>
  </div>
  <div class="form-group col-md-4">
    {{ Form::text('last_name', null, ['class' => 'form-control', 'id' => 'last_name', 'required pattern' => '^[a-zA-Z_áéíóúñ\s]{0,30}$']) }}
    <small id="nameHelp" class="form-text text-muted">Apellido del beneficiario</small>
  </div>
  <div class="form-group col-md-4">
    {{ Form::text('dni', null, ['class' => 'form-control', 'id' => 'dni', 'pattern'=>'[0-9]{0,15}']) }}
    <small id="nameHelp" class="form-text text-muted">Cedula del Usuario</small>
  </div>

                  
  <div class="form-group col-md-4">
    {{ Form::text('telephone', null, ['class' => 'form-control', 'id' => 'telephone', 'pattern' => '[0-9]{0,15}']) }}
    <small id="birthdateHelp" class="form-text text-muted">Telefono</small>
  </div>

  <div class="form-group col-md-4">
    {{  Form::select('rol_id', $roles, null,['tabindex' => 4,'class' => 'form-control roles', 'id' => 'rol_id','placeholder' => 'Seleccione el rol...']) }}
    <small id="genderHelp" class="form-text text-muted">Rol del usuario</small>
  </div>

  <div class="form-group col-md-4" id="especialidad" style="display: none;">
    {{ Form::text('especialidad', null, ['class' => 'form-control', 'id' => 'especialidad']) }}
    <small id="nameHelp" class="form-text text-muted">Especialidad</small>
  </div>
<div class="form-group col-md-6">
    {{ Form::text('email', null, ['class' => 'form-control', 'id' => 'email']) }}
    <small id="nameHelp" class="form-text text-muted">Email del Uasuario</small>
  </div>
  <div class="form-group col-md-6">
    <input type="password" id="password" name="password" class="form-control" required>
    <small id="nameHelp" class="form-text text-muted">Password del Usuario</small>
  </div>
<div class="form-group col-md-12">
    {{ Form::file('image', null, ['class' => 'form-control', 'id' => 'image']) }}
    <small id="nameHelp" class="form-text text-muted">Imagen</small>
</div>

<div class="modal-footer">
    
    <div class="form-group col-md-12">
      <a class="btn btn-danger btn-sm" onclick="javascript:history.back();"><i class=""></i>Cancelar</a>
      {{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']) }}
    </div>
  </div>