	
  <div class="form-group col-md-12">
    {{ Form::text('dependency', null, ['class' => 'form-control', 'id' => 'dependency']) }}
    <small id="nameHelp" class="form-text text-muted">Nombre de la Dependencia</small>
  </div>
  <div class="form-group">
    {{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']) }}
    <a class="btn btn-danger btn-sm" onclick="javascript:history.back();"><i class=""></i>Cancelar</a>
  </div>