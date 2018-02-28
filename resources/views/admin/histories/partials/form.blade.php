
  <div class="panel-group" id="accordion">
    <div class="panel panel-info">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">Parte 1</a>
          <p class="pull-right">Datos del Titular</p>
        </h4>
      </div>
      <div id="collapse1" class="panel-collapse collapse in">
        	<div class="panel-body">
	        	<div class="form-group col-md-6">
	                {{ Form::select('people_id', $peoples, null, ['class' => 'form-control', 'id' => 'people']) }}			    
				    <small id="nameHelp" class="form-text text-muted">Titular</small>
				</div>
			    <div class="form-group col-md-6">
				    {{ Form::text('medical', null, ['class' => 'form-control']) }}
				    <small id="nameHelp" class="form-text text-muted">Medico que Llena la Historia</small>
			    </div>
			    <div class="form-group col-md-6">
				    {{ Form::text('motive', null, ['class' => 'form-control']) }}
				    <small id="nameHelp" class="form-text text-muted">Motivo de la Consulta</small>
			    </div>
			    <div class="form-group col-md-6">
			    {{ Form::text('current_illness', null, ['class' => 'form-control']) }}
			    <small id="nameHelp" class="form-text text-muted">Enfermedad Actual</small>
			    </div>
        	</div>
      	</div>
    </div>
    <div class="panel panel-danger">
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
			
			<p><b>Habitos Psicobiologicos</b></p>

			<div class="form-group col-md-6">
			    {{ Form::checkbox('alcohol', 'YES', false) }}
			    
			    <small id="nameHelp" class="form-text text-muted">Alcohol</small>
			</div>
			<div class="form-group col-md-6">
			    {{ Form::checkbox('cigarettes', 'YES', false) }}
			    <small id="nameHelp" class="form-text text-muted">Cigarrillos</small>
			  </div>
			  <div class="form-group col-md-6">
			    {{ Form::checkbox('cofe', 'YES', false) }}
			    <small id="nameHelp" class="form-text text-muted">Cafe</small>
			</div>
			<div class="form-group col-md-6">
			    {{ Form::checkbox('tobacco', 'YES', false) }}
			    <small id="nameHelp" class="form-text text-muted">Tabaco</small>
			</div>

			<p>Examen Funcional</p>
			<div class="form-group col-md-3">
				{{ Form::label('fever', 'General:') }}
				<small id="nameHelp" class="form-text text-muted">Fiebre</small>
			    {{ Form::checkbox('fever', 'YES', false) }}
			    
			</div>
			<div class="form-group col-md-4">
				{{ Form::label('hand', 'Cabeza:') }}
				<small id="nameHelp" class="form-text text-muted">Mareos</small>
			    {{ Form::checkbox('head_dizziness', 'YES', false) }}
				<small id="nameHelp" class="form-text text-muted">Dolor</small>
			    {{ Form::checkbox('headache', 'YES', false) }}
			</div>
			<div class="form-group col-md-5">
				{{ Form::label('eyes', 'Ojos:') }}
				<small id="nameHelp" class="form-text text-muted">Vision Borrosa</small>
			    {{ Form::checkbox('blurry_vision', 'YES', false) }}
				<small id="nameHelp" class="form-text text-muted">Vision Doble</small>
			    {{ Form::checkbox('double_vision', 'YES', false) }}
			    <small id="nameHelp" class="form-text text-muted">Lagrimeo</small>
			    {{ Form::checkbox('tearing', 'YES', false) }}
			</div>
			<div class="form-group col-md-4">
				{{ Form::label('hand', 'Nariz:') }}
				<small id="nameHelp" class="form-text text-muted">Sangrado</small>
			    {{ Form::checkbox('bleeding_nose', 'YES', false) }}
				<small id="nameHelp" class="form-text text-muted">Secrecion</small>
			    {{ Form::checkbox('nose_secretion', 'YES', false) }}
			</div>
			<div class="form-group col-md-5">
				{{ Form::label('eyes', 'Boca:') }}
				<small id="nameHelp" class="form-text text-muted">Halitosis</small>
			    {{ Form::checkbox('halitosis', 'YES', false) }}
				<small id="nameHelp" class="form-text text-muted">Caries</small>
			    {{ Form::checkbox('cavities', 'YES', false) }}
			    <small id="nameHelp" class="form-text text-muted">Edentula</small>
			    {{ Form::checkbox('edentula', 'YES', false) }}
			</div>
			<div class="form-group col-md-3">
				{{ Form::label('fever', 'Cuello:') }}
				<small id="nameHelp" class="form-text text-muted">Dolor</small>
			    {{ Form::checkbox('neck_pain', 'YES', false) }}
			    
			</div>
			<div class="form-group col-md-5">
				{{ Form::label('eyes', 'Senos:') }}
				<small id="nameHelp" class="form-text text-muted">Masas</small>
			    {{ Form::checkbox('breast_masses', 'YES', false) }}
				<small id="nameHelp" class="form-text text-muted">Dolor</small>
			    {{ Form::checkbox('breast_pain', 'YES', false) }}
			    <small id="nameHelp" class="form-text text-muted">Secrecion</small>
			    {{ Form::checkbox('breast_secretion', 'YES', false) }}
			</div>
			<div class="form-group col-md-3">
				{{ Form::label('eyes', 'Pulso:') }}
			    {{ Form::text('pulse', null, ['class' => 'form-control']) }}
			</div>
			<div class="form-group col-md-4">
				{{ Form::label('hand', 'Torax:') }}
				<small id="nameHelp" class="form-text text-muted">Dolor</small>
			    {{ Form::checkbox('torax_pain', 'YES', false) }}
				<small id="nameHelp" class="form-text text-muted">Angustias</small>
			    {{ Form::checkbox('torax_angst', 'YES', false) }}
			</div>
			<div class="form-group col-md-12">
				{{ Form::label('eyes', 'Corazon:') }}
				<small id="nameHelp" class="form-text text-muted">Disnea</small>
			    {{ Form::checkbox('dyspnoa', 'YES', false) }}
				<small id="nameHelp" class="form-text text-muted">Dolor</small>
			    {{ Form::checkbox('heart_pain', 'YES', false) }}
			    <small id="nameHelp" class="form-text text-muted">Taquicardias</small>
			    {{ Form::checkbox('tachycardias', 'YES', false) }}
			    <small id="nameHelp" class="form-text text-muted">Opresion</small>
			    {{ Form::checkbox('oppression', 'YES', false) }}
			</div>
			<div class="form-group col-md-12">
				{{ Form::label('eyes', 'Respiratorio:') }}
				<small id="nameHelp" class="form-text text-muted">Dific. para Respirar</small>
			    {{ Form::checkbox('difficulty_breathing', 'YES', false) }}
				<small id="nameHelp" class="form-text text-muted">Dolor</small>
			    {{ Form::checkbox('breathing_pain', 'YES', false) }}
			    <small id="nameHelp" class="form-text text-muted">Tos</small>
			    {{ Form::checkbox('cough', 'YES', false) }}
			    <small id="nameHelp" class="form-text text-muted">Expectoracion</small>
			    {{ Form::checkbox('expectoration', 'YES', false) }}
			</div>
			<div class="form-group col-md-5">
				{{ Form::label('eyes', 'Abdomen:') }}
				<small id="nameHelp" class="form-text text-muted">Dolor</small>
			    {{ Form::checkbox('abdomen_pain', 'YES', false) }}
				<small id="nameHelp" class="form-text text-muted">Diarreas</small>
			    {{ Form::checkbox('diarrhea', 'YES', false) }}
			    <small id="nameHelp" class="form-text text-muted">Hernias</small>
			    {{ Form::checkbox('hernias', 'YES', false) }}
			</div>
			<div class="form-group col-md-4">
				{{ Form::label('eyes', 'Genitales:') }}
				<small id="nameHelp" class="form-text text-muted">Hombre</small>
			    {{ Form::checkbox('genitals_man', 'YES', false) }}
				<small id="nameHelp" class="form-text text-muted">Mujer</small>
			    {{ Form::checkbox('genitals_woman', 'YES', false) }}
			</div>
			<div class="form-group col-md-3">
				{{ Form::label('eyes', 'Ano:') }}
				<small id="nameHelp" class="form-text text-muted">Fisura</small>
			    {{ Form::checkbox('fissure_anus', 'YES', false) }}
				
			</div>
			<div class="form-group col-md-12">
				{{ Form::label('eyes', 'Genitourdinario:') }}
				<small id="nameHelp" class="form-text text-muted">Micciones</small>
			    {{ Form::checkbox('genital_micturition', 'YES', false) }}
				<small id="nameHelp" class="form-text text-muted">Anatomia</small>
			    {{ Form::checkbox('genital_anatomy', 'YES', false) }}
			    <small id="nameHelp" class="form-text text-muted">Secrecion</small>
			    {{ Form::checkbox('genital_secretion', 'YES', false) }}
			    <small id="nameHelp" class="form-text text-muted">Ardor</small>
			    {{ Form::checkbox('genital_burning', 'YES', false) }}
			    <small id="nameHelp" class="form-text text-muted">Dolor</small>
			    {{ Form::checkbox('genital_pain', 'YES', false) }}
			</div>
			<div class="form-group col-md-7">
				{{ Form::label('eyes', 'Extremidades:') }}
				<small id="nameHelp" class="form-text text-muted">Dolor</small>
			    {{ Form::checkbox('pain_limbs', 'YES', false) }}
				<small id="nameHelp" class="form-text text-muted">Cansancio</small>
			    {{ Form::checkbox('extremity_fatigue', 'YES', false) }}
			    <small id="nameHelp" class="form-text text-muted">Pesadez</small>
			    {{ Form::checkbox('heaviness_tips', 'YES', false) }}
				<small id="nameHelp" class="form-text text-muted">Hinchazon</small>
			    {{ Form::checkbox('swelling_extremities', 'YES', false) }}
			</div>
			<div class="form-group col-md-5">
				{{ Form::label('eyes', 'Neurologico:') }}
				<small id="nameHelp" class="form-text text-muted">Dolor</small>
			    {{ Form::checkbox('neurological_pain', 'YES', false) }}
				<small id="nameHelp" class="form-text text-muted">Mareos</small>
			    {{ Form::checkbox('neurological_dizziness', 'YES', false) }}
			    <small id="nameHelp" class="form-text text-muted">Desorientado</small>
			    {{ Form::checkbox('disorientated', 'YES', false) }}
			</div>
        </div>
      </div>
    </div>
    <div class="panel panel-warning">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">Parte 3</a>
          <p class="pull-right">Examen Fisico</p>

        </h4>
      </div>
      <div id="collapse3" class="panel-collapse collapse">
        <div class="panel-body">
        	<div class="form-group col-md-3">
			    {{ Form::text('vital_signs', null, ['class' => 'form-control']) }}
			    <small id="nameHelp" class="form-text text-muted">Signos Vitales</small>
			</div>
			<div class="form-group col-md-3">
			    {{ Form::text('weight', null, ['class' => 'form-control']) }}
			    <small id="nameHelp" class="form-text text-muted">Peso</small>
			</div>
			<div class="form-group col-md-3">
			    {{ Form::text('size', null, ['class' => 'form-control']) }}
			    <small id="nameHelp" class="form-text text-muted">Talla</small>
			</div>
			<div class="form-group col-md-3">
			    {{ Form::text('imc', null, ['class' => 'form-control']) }}
			    <small id="nameHelp" class="form-text text-muted">IMC</small>
			</div>
        	<div class="form-group col-md-3">
			    {{ Form::text('fc', null, ['class' => 'form-control']) }}
			    <small id="nameHelp" class="form-text text-muted">F.C</small>
			</div>
			<div class="form-group col-md-3">
			    {{ Form::text('fr', null, ['class' => 'form-control']) }}
			    <small id="nameHelp" class="form-text text-muted">F.R</small>
			</div>
			<div class="form-group col-md-3">
			    {{ Form::text('ta', null, ['class' => 'form-control']) }}
			    <small id="nameHelp" class="form-text text-muted">T/A</small>
			</div>
			<div class="form-group col-md-3">
			    {{ Form::text('ca', null, ['class' => 'form-control']) }}
			    <small id="nameHelp" class="form-text text-muted">C.A</small>
			</div>
			<div class="form-group col-md-4">
			    {{ Form::text('pulse_fisic', null, ['class' => 'form-control']) }}
			    <small id="nameHelp" class="form-text text-muted">Pulso Fisico</small>
			</div>
			<div class="form-group col-md-4">
			    {{ Form::text('skin', null, ['class' => 'form-control']) }}
			    <small id="nameHelp" class="form-text text-muted">Piel</small>
			</div>
			<div class="form-group col-md-4">
			    {{ Form::text('head', null, ['class' => 'form-control']) }}
			    <small id="nameHelp" class="form-text text-muted">Cabeza</small>
			</div>

			<div class="form-group col-md-3">
				{{ Form::label('fever', 'Nariz:') }}
				<small id="nameHelp" class="form-text text-muted">Fosas Nasales</small>
			    {{ Form::checkbox('nostrils', 'YES', false) }}
			    
			</div>
			<div class="form-group col-md-4">
				{{ Form::label('hand', 'Boca:') }}
				<small id="nameHelp" class="form-text text-muted">Simetrica</small>
			    {{ Form::checkbox('symmetrical_mouth', 'YES', false) }}
				<small id="nameHelp" class="form-text text-muted">Asimetrica</small>
			    {{ Form::checkbox('mouth_asymmetry', 'YES', false) }}
			</div>
			<div class="form-group col-md-3">
				{{ Form::label('fever', 'Senos:') }}
				<small id="nameHelp" class="form-text text-muted">Simetricos</small>
			    {{ Form::checkbox('symmetrical_sinuses', 'YES', false) }}
			    
			</div>
			<div class="form-group col-md-4">
				{{ Form::label('hand', 'Torax:') }}
				<small id="nameHelp" class="form-text text-muted">Simetrico</small>
			    {{ Form::checkbox('symmetric_thorax', 'YES', false) }}
				<small id="nameHelp" class="form-text text-muted">Asimetrico</small>
			    {{ Form::checkbox('asymmetric_thorax', 'YES', false) }}
			</div>
			<div class="form-group col-md-4">
				{{ Form::label('hand', 'Corazon:') }}
				<small id="nameHelp" class="form-text text-muted">RS CS</small>
			    {{ Form::checkbox('rs_cs', 'YES', false) }}
				<small id="nameHelp" class="form-text text-muted">Soplo</small>
			    {{ Form::checkbox('soplo', 'YES', false) }}
			    <small id="nameHelp" class="form-text text-muted">Ritmo</small>
			    {{ Form::checkbox('ritmo', 'YES', false) }}
			</div>
			<div class="form-group col-md-4">
				{{ Form::label('hand', 'Respiratorio:') }}
				<small id="nameHelp" class="form-text text-muted">RS RS</small>
			    {{ Form::checkbox('rs', 'YES', false) }}
				<small id="nameHelp" class="form-text text-muted">MV</small>
			    {{ Form::checkbox('mv', 'YES', false) }}
			</div>
			<div class="form-group col-md-7">
				{{ Form::label('hand', 'Abdomen:') }}
				<small id="nameHelp" class="form-text text-muted">Globoso</small>
			    {{ Form::checkbox('globose', 'YES', false) }}
				<small id="nameHelp" class="form-text text-muted">Plano</small>
			    {{ Form::checkbox('flat', 'YES', false) }}
			    <small id="nameHelp" class="form-text text-muted">Rshas</small>
			    {{ Form::checkbox('rshas', 'YES', false) }}
			    <small id="nameHelp" class="form-text text-muted">Blando</small>
			    {{ Form::checkbox('soft', 'YES', false) }}
			    <small id="nameHelp" class="form-text text-muted">Doloroso</small>
			    {{ Form::checkbox('painful', 'YES', false) }}
			</div>
			<div class="form-group col-md-5">
				{{ Form::label('hand', 'Genitales:') }}
				<small id="nameHelp" class="form-text text-muted">Masculinos</small>
			    {{ Form::checkbox('male_genitals', 'YES', false) }}
				<small id="nameHelp" class="form-text text-muted">Femeninos</small>
			    {{ Form::checkbox('female_genitals', 'YES', false) }}
			</div>
			<div class="form-group col-md-3">
				{{ Form::label('hand', 'Ano:') }}
				<small id="nameHelp" class="form-text text-muted">Conducto Anal</small>
			    {{ Form::checkbox('anal_canal', 'YES', false) }}
			</div>
			<div class="form-group col-md-9">
				{{ Form::label('hand', 'Extremidades:') }}
				<small id="nameHelp" class="form-text text-muted">Asimetricas</small>
			    {{ Form::checkbox('asymmetric_tips', 'YES', false) }}
				<small id="nameHelp" class="form-text text-muted">Simetricas</small>
			    {{ Form::checkbox('symmetric_tips', 'YES', false) }}
			    <small id="nameHelp" class="form-text text-muted">Eutroficas</small>
			    {{ Form::checkbox('eutrophic', 'YES', false) }}
			    <small id="nameHelp" class="form-text text-muted">Atroficas</small>
			    {{ Form::checkbox('atrophied', 'YES', false) }}
			    <small id="nameHelp" class="form-text text-muted">Varices</small>
			    {{ Form::checkbox('varicose_veins', 'YES', false) }}
			    <small id="nameHelp" class="form-text text-muted">Edema</small>
			    {{ Form::checkbox('edema', 'YES', false) }}
			</div>
			<div class="form-group col-md-12">
				{{ Form::label('hand', 'Neurologico:') }}
				<small id="nameHelp" class="form-text text-muted">Vigil</small>
			    {{ Form::checkbox('vigil', 'YES', false) }}
				<small id="nameHelp" class="form-text text-muted">Orientado</small>
			    {{ Form::checkbox('oriented', 'YES', false) }}
			    <small id="nameHelp" class="form-text text-muted">Fuer. Muscular</small>
			    {{ Form::checkbox('muscular_strength', 'YES', false) }}
			    <small id="nameHelp" class="form-text text-muted">Lenguaje</small>
			    {{ Form::checkbox('language', 'YES', false) }}
			    <small id="nameHelp" class="form-text text-muted">Reflejos</small>
			    {{ Form::checkbox('reflexes', 'YES', false) }}
			</div>
			<div class="form-group col-md-12">
				{{ Form::label('hand', 'Diagnosticos:') }}
			    {{ Form::textarea('diagnoses', null, ['class' => 'form-control', 'rows'=> '3']) }}
			</div>
			<div class="form-group col-md-12">
				{{ Form::label('plan', 'Plan:') }}
			    {{ Form::textarea('plan', null, ['class' => 'form-control', 'rows'=> '3']) }}
			</div>
			<div class="form-group col-md-12">
				{{ Form::label('observations', 'Observaciones:') }}
			    {{ Form::textarea('observations', null, ['class' => 'form-control', 'rows'=> '3']) }}
			</div>
        </div>
      </div>
    </div>
  </div> 
  <div class="form-group">
    {{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']) }}
    <a class="btn btn-danger btn-sm" onclick="javascript:history.back();"><i class=""></i>Cancelar</a>
  </div>
