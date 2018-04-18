	
<div class="form-group col-md-12">
	{{ Form::select('people_id', $peoples, null, ['class' => 'form-control', 'id' => 'people']) }}	    
	<small id="nameHelp" class="form-text text-muted">Titular</small>
</div>
<div class="form-group col-md-12">
	{{ Form::text('pathology', null, ['class' => 'form-control', 'id' => 'pathology']) }}
	<small id="nameHelp" class="form-text text-muted">Patologia</small>
</div>

<div class="form-group col-md-4">
	{{ Form::text('date', null, ['class' => 'form-control', 'id' => 'date']) }}
	<small id="dateHelp" class="form-text text-muted">Fecha de Emisión</small>
</div>
<div class="form-group col-md-4">
	{{ Form::text('since', null, ['class' => 'form-control', 'id' => 'since']) }}
	<small id="sinceHelp" class="form-text text-muted">Fecha de Inicio</small>
</div>
<div class="form-group col-md-4">
	{{ Form::text('until', null, ['class' => 'form-control', 'id' => 'until']) }}
	<small id="untilHelp" class="form-text text-muted">Fecha de Culminación</small>
</div>

<div class="form-group col-md-6">
	{{ Form::text('doctor_issues', null, ['class' => 'form-control', 'id' => 'doctor_issues']) }}
	<small id="doctorissuesHelp" class="form-text text-muted">Medico que Emite el Reposo</small>
</div>

<div class="form-group col-md-6">
	{{ Form::text('valid_doctor', null, ['class' => 'form-control', 'id' => 'valid_doctor']) }}
	<small id="valid_doctorHelspecialtyp" class="form-text text-muted">Medico que Valida el Reposo</small>
</div>

<div class="form-group col-md-6">
	{{ Form::text('specialty', null, ['class' => 'form-control', 'id' => 'specialty']) }}
	<small id="specialtyHelp" class="form-text text-muted">Especialidad</small>
</div>

<div class="form-group col-md-6">
	{{ Form::text('rest_days', null, ['class' => 'form-control', 'id' => 'rest_days']) }}
	<small id="rest_daysHelp" class="form-text text-muted">Total Días de Reposo</small>
</div>

  <div class="form-group">
    {{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']) }}
    <a class="btn btn-danger btn-sm" onclick="javascript:history.back();"><i class=""></i>Cancelar</a>
  </div>