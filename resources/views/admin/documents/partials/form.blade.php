	
<div class="form-group col-md-6">
	{{ Form::select('people_id', $peoples, null, ['class' => 'form-control', 'id' => 'people']) }}	    
	<small id="nameHelp" class="form-text text-muted">Titular</small>
</div>
<div class="form-group col-md-6">
	{{ Form::file('file', null, ['class' => 'form-control', 'id' => 'document']) }}
	<small id="nameHelp" class="form-text text-muted">Documentos</small>
</div>

  <div class="form-group" align="right">
    {{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']) }}
    <a class="btn btn-danger btn-sm" onclick="javascript:history.back();"><i class=""></i>Cancelar</a>
  </div>