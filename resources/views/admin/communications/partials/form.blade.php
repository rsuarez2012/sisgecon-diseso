<div class="col-md-6">	
	<div class="form-group col-md-12">
		{{ Form::select('dependency_id', $dependencies, null, ['class' => 'form-control', 'id' => 'dependencie']) }}	    
		<small id="nameHelp" class="form-text text-muted">Para</small>
	</div>

	<div class="form-group col-md-12">
		{{ Form::text('affair', null, ['class' => 'form-control', 'id' => 'affair']) }}
		<small id="nameHelp" class="form-text text-muted">Asunto</small>
	</div>

	<div class="form-group col-md-12">
		{{ Form::text('date', null, ['class' => 'form-control', 'id' => 'date']) }}
		<small id="dateHelp" class="form-text text-muted">Fecha</small>
	</div>
	
</div>
<div class="col-md-6">
	<div class="form-group col-md-12">
		{{ Form::select('director_id', $executive, null, ['class' => 'form-control', 'id' => 'executive']) }}
		<small id="doctorissuesHelp" class="form-text text-muted">Director</small>
	</div>
	<div class="form-group col-md-12">
		{{ Form::select('copy[]', $dependencies, null, ['class' => 'form-control select2_multiple', 'id' => 'dependencie', 'multiple' => 'multiple']) }}
		<small id="doctorissuesHelp" class="form-text text-muted">Enviar Copia A</small>
	</div>
	<div class="form-group col-md-12">
		{{ Form::checkbox('annexed', '1') }}
		
		<small id="doctorissuesHelp" class="form-text text-muted">Agregar Anexos</small>
	</div>
</div>
<div class="col-md-12">
	<div class="form-group col-md-12">
		{{ Form::textarea('body', null, ['class' => 'form-control ckeditor', 'id' => 'body',  'rows' => 4, 'cols' => 54]) }}
		<small id="sinceHelp" class="form-text text-muted">Cuerpo</small>
	</div>
	<div class="form-group col-md-12">
	    {{ Form::submit('Guardar', ['class' => 'btn btn-xs btn-primary pull-right']) }}
	    <a class="btn btn-danger btn-xs pull-right" onclick="javascript:history.back();"><i class=""></i>Cancelar</a>
	  </div>
</div>