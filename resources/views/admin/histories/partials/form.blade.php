
  <div class="panel-group" id="accordion">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">Parte 1</a>
          <p class="pull-right">Datos del Titular</p>
        </h4>
      </div>
      <div id="collapse1" class="panel-collapse collapse in">
        <div class="panel-body">
        	<div class="form-group col-md-6">
			    {{ Form::text('dependency', null, ['class' => 'form-control', 'id' => 'dependency']) }}
			    <small id="nameHelp" class="form-text text-muted">Titular</small>
			  </div>
			  <div class="form-group col-md-6">
			    {{ Form::text('dependency', null, ['class' => 'form-control', 'id' => 'dependency']) }}
			    <small id="nameHelp" class="form-text text-muted">Medico que Llena la Historia</small>
			  </div>
			  <div class="form-group col-md-6">
			    {{ Form::text('dependency', null, ['class' => 'form-control', 'id' => 'dependency']) }}
			    <small id="nameHelp" class="form-text text-muted">Motivo de la Consulta</small>
			  </div>
			  <div class="form-group col-md-6">
			    {{ Form::text('dependency', null, ['class' => 'form-control', 'id' => 'dependency']) }}
			    <small id="nameHelp" class="form-text text-muted">Enfermedad Actual</small>
			  </div>
        </div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">Parte 2</a>
          <p class="pull-right">Antecedentes, Habitos Psicobiologicos y Examen Funcional</p>

        </h4>
      </div>
      <div id="collapse2" class="panel-collapse collapse">
        <div class="panel-body">
        	<div class="form-group col-md-12">
			    {{ Form::text('personal_history', null, ['class' => 'form-control']) }}
			    <small id="nameHelp" class="form-text text-muted">Antecedentes Personales</small>
			  </div>
			  <div class="form-group col-md-6">
			    {{ Form::text('mon_history', null, ['class' => 'form-control']) }}
			    <small id="nameHelp" class="form-text text-muted">Antecedentes de la Madre</small>
			</div>
			<div class="form-group col-md-6">
			    {{ Form::text('dad_history', null, ['class' => 'form-control']) }}
			    <small id="nameHelp" class="form-text text-muted">Antecedentes del Padre</small>
			  </div>
			  <div class="form-group col-md-6">
			    {{ Form::text('brot_history', null, ['class' => 'form-control']) }}
			    <small id="nameHelp" class="form-text text-muted">Antecedentes de Hermanos</small>
			</div>
			<div class="form-group col-md-6">
			    {{ Form::text('sons_history', null, ['class' => 'form-control']) }}
			    <small id="nameHelp" class="form-text text-muted">Antecedentes de Hijos</small>
			</div>
			<div class="form-group col-md-12">
			    {{ Form::text('gynecology', null, ['class' => 'form-control']) }}
			    <small id="nameHelp" class="form-text text-muted">Antecedentes Ginecologicos</small>
			  </div>
			
			<p>Habitos Psicobiologicos</p>

			<div class="form-group col-md-6">
			    {{ Form::checkbox('alcohol', 'NO', false) }}
			    
			    <small id="nameHelp" class="form-text text-muted">Alcohol</small>
			</div>
			<div class="form-group col-md-6">
			    {{ Form::checkbox('cigarettes', 'NO', false) }}
			    <small id="nameHelp" class="form-text text-muted">Cigarrillos</small>
			  </div>
			  <div class="form-group col-md-6">
			    {{ Form::checkbox('cofe', 'NO', false) }}
			    <small id="nameHelp" class="form-text text-muted">Cafe</small>
			</div>
			<div class="form-group col-md-6">
			    {{ Form::checkbox('tobacco', 'NO', false) }}
			    <small id="nameHelp" class="form-text text-muted">Tabaco</small>
			</div>

			<p>Examen Funcional</p>
			<div class="form-group col-md-3">
				{{ Form::label('fever', 'General:') }}
				<small id="nameHelp" class="form-text text-muted">Fiebre</small>
			    {{ Form::checkbox('fever', 'NO', false) }}
			    
			</div>
			<div class="form-group col-md-4">
				{{ Form::label('hand', 'Cabeza:') }}
				<small id="nameHelp" class="form-text text-muted">Mareos</small>
			    {{ Form::checkbox('head_dizziness', 'NO', false) }}
				<small id="nameHelp" class="form-text text-muted">Dolor</small>
			    {{ Form::checkbox('headache', 'NO', false) }}
			</div>
			<div class="form-group col-md-5">
				{{ Form::label('eyes', 'Ojos:') }}
				<small id="nameHelp" class="form-text text-muted">Vision Borrosa</small>
			    {{ Form::checkbox('head_dizziness', 'NO', false) }}
				<small id="nameHelp" class="form-text text-muted">Vision Doble</small>
			    {{ Form::checkbox('headache', 'NO', false) }}
			    <small id="nameHelp" class="form-text text-muted">Lagrimeo</small>
			    {{ Form::checkbox('headache', 'NO', false) }}
			</div>
			<div class="form-group col-md-4">
				{{ Form::label('hand', 'Nariz:') }}
				<small id="nameHelp" class="form-text text-muted">Sangrado</small>
			    {{ Form::checkbox('head_dizziness', 'NO', false) }}
				<small id="nameHelp" class="form-text text-muted">Secrecion</small>
			    {{ Form::checkbox('headache', 'NO', false) }}
			</div>
			<div class="form-group col-md-5">
				{{ Form::label('eyes', 'Boca:') }}
				<small id="nameHelp" class="form-text text-muted">Halitosis</small>
			    {{ Form::checkbox('head_dizziness', 'NO', false) }}
				<small id="nameHelp" class="form-text text-muted">Caries</small>
			    {{ Form::checkbox('headache', 'NO', false) }}
			    <small id="nameHelp" class="form-text text-muted">Edentula</small>
			    {{ Form::checkbox('headache', 'NO', false) }}
			</div>
			<div class="form-group col-md-3">
				{{ Form::label('fever', 'Cuello:') }}
				<small id="nameHelp" class="form-text text-muted">Dolor</small>
			    {{ Form::checkbox('fever', 'NO', false) }}
			    
			</div>
			<div class="form-group col-md-5">
				{{ Form::label('eyes', 'Senos:') }}
				<small id="nameHelp" class="form-text text-muted">Masas</small>
			    {{ Form::checkbox('head_dizziness', 'NO', false) }}
				<small id="nameHelp" class="form-text text-muted">Dolor</small>
			    {{ Form::checkbox('headache', 'NO', false) }}
			    <small id="nameHelp" class="form-text text-muted">Secrecion</small>
			    {{ Form::checkbox('headache', 'NO', false) }}
			</div>
			<div class="form-group col-md-3">
				{{ Form::label('eyes', 'Pulso:') }}
			    {{ Form::text('personal_history', null, ['class' => 'form-control']) }}
			</div>
			<div class="form-group col-md-4">
				{{ Form::label('hand', 'Torax:') }}
				<small id="nameHelp" class="form-text text-muted">Dolor</small>
			    {{ Form::checkbox('head_dizziness', 'NO', false) }}
				<small id="nameHelp" class="form-text text-muted">Angustias</small>
			    {{ Form::checkbox('headache', 'NO', false) }}
			</div>
			<div class="form-group col-md-6">
				{{ Form::label('eyes', 'Corazon:') }}
				<small id="nameHelp" class="form-text text-muted">Disnea</small>
			    {{ Form::checkbox('head_dizziness', 'NO', false) }}
				<small id="nameHelp" class="form-text text-muted">Dolor</small>
			    {{ Form::checkbox('headache', 'NO', false) }}
			    <small id="nameHelp" class="form-text text-muted">Taquicardias</small>
			    {{ Form::checkbox('headache', 'NO', false) }}
			    <small id="nameHelp" class="form-text text-muted">Opresion</small>
			    {{ Form::checkbox('headache', 'NO', false) }}
			</div>
			<div class="form-group col-md-6">
				{{ Form::label('eyes', 'Respiratorio:') }}
				<small id="nameHelp" class="form-text text-muted">Dific. para Respirar</small>
			    {{ Form::checkbox('head_dizziness', 'NO', false) }}
				<small id="nameHelp" class="form-text text-muted">Dolor</small>
			    {{ Form::checkbox('headache', 'NO', false) }}
			    <small id="nameHelp" class="form-text text-muted">Tos</small>
			    {{ Form::checkbox('headache', 'NO', false) }}
			    <small id="nameHelp" class="form-text text-muted">Expectoracion</small>
			    {{ Form::checkbox('headache', 'NO', false) }}
			</div>
			<div class="form-group col-md-5">
				{{ Form::label('eyes', 'Abdomen:') }}
				<small id="nameHelp" class="form-text text-muted">Dolor</small>
			    {{ Form::checkbox('head_dizziness', 'NO', false) }}
				<small id="nameHelp" class="form-text text-muted">Diarreas</small>
			    {{ Form::checkbox('headache', 'NO', false) }}
			    <small id="nameHelp" class="form-text text-muted">Hernias</small>
			    {{ Form::checkbox('headache', 'NO', false) }}
			</div>
			<div class="form-group col-md-4">
				{{ Form::label('eyes', 'Genitales:') }}
				<small id="nameHelp" class="form-text text-muted">Hombre</small>
			    {{ Form::checkbox('head_dizziness', 'NO', false) }}
				<small id="nameHelp" class="form-text text-muted">Mujer</small>
			    {{ Form::checkbox('headache', 'NO', false) }}
			</div>
			<div class="form-group col-md-3">
				{{ Form::label('eyes', 'Ano:') }}
				<small id="nameHelp" class="form-text text-muted">Fisura</small>
			    {{ Form::checkbox('head_dizziness', 'NO', false) }}
				
			</div>
			<div class="form-group col-md-12">
				{{ Form::label('eyes', 'Genitourdinario:') }}
				<small id="nameHelp" class="form-text text-muted">Micciones</small>
			    {{ Form::checkbox('head_dizziness', 'NO', false) }}
				<small id="nameHelp" class="form-text text-muted">Anatomia</small>
			    {{ Form::checkbox('headache', 'NO', false) }}
			    <small id="nameHelp" class="form-text text-muted">Secrecion</small>
			    {{ Form::checkbox('headache', 'NO', false) }}
			    <small id="nameHelp" class="form-text text-muted">Ardor</small>
			    {{ Form::checkbox('headache', 'NO', false) }}
			    <small id="nameHelp" class="form-text text-muted">Dolor</small>
			    {{ Form::checkbox('headache', 'NO', false) }}
			</div>
			<div class="form-group col-md-7">
				{{ Form::label('eyes', 'Extremidades:') }}
				<small id="nameHelp" class="form-text text-muted">Dolor</small>
			    {{ Form::checkbox('head_dizziness', 'NO', false) }}
				<small id="nameHelp" class="form-text text-muted">Cansancio</small>
			    {{ Form::checkbox('headache', 'NO', false) }}
			    <small id="nameHelp" class="form-text text-muted">Pesadez</small>
			    {{ Form::checkbox('head_dizziness', 'NO', false) }}
				<small id="nameHelp" class="form-text text-muted">Hinchazon</small>
			    {{ Form::checkbox('headache', 'NO', false) }}
			</div>
			<div class="form-group col-md-5">
				{{ Form::label('eyes', 'Neurologico:') }}
				<small id="nameHelp" class="form-text text-muted">Dolor</small>
			    {{ Form::checkbox('head_dizziness', 'NO', false) }}
				<small id="nameHelp" class="form-text text-muted">Mareos</small>
			    {{ Form::checkbox('headache', 'NO', false) }}
			    <small id="nameHelp" class="form-text text-muted">Desorientado</small>
			    {{ Form::checkbox('head_dizziness', 'NO', false) }}
			</div>
        </div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">Parte 3</a>
          <p class="pull-right">Examen Fisico</p>

        </h4>
      </div>
      <div id="collapse3" class="panel-collapse collapse">
        <div class="panel-body">
        	
        </div>
      </div>
    </div>
  </div> 
  <div class="form-group">
    {{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']) }}
    <a class="btn btn-danger btn-sm" onclick="javascript:history.back();"><i class=""></i>Cancelar</a>
  </div>
