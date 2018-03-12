
  <div class="panel-group" id="accordion">
    <div class="panel panel-info">
        <div class="panel-heading">
	        <h4 class="panel-title">
	          <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">Parte 1</a>
	          <p class="pull-right">Titular</p>
	        </h4>
        </div>
      	<div id="collapse1" class="panel-collapse collapse in">
        	<div class="panel-body">
	        	<!--<div class="form-group col-md-12">
	                			    
				    <small id="nameHelp" class="form-text text-muted">Titular</small>
				</div>-->
				<div class="form-group table-responsive">
				    <table class="table table-bordered col-md-12">
				    	<thead>
					    	<tr>
					    		<th>
					    			Titular:
					    		</th>
					    		<th colspan="4">
					    			{{ Form::select('people_id', $peoples, null, ['class' => 'form-control', 'id' => 'people']) }}
					    		</th>
					    	</tr>
					    	<tr>
					    		<th colspan="5" class="active" style="text-align: center;">
					    			Trabajos Anteriores
					    		</th>
					    	</tr>
			        		<tr class="active">
			        			<th width="18%">EMPRESA</th>
			        			<th width="22%">ACTIVIDAD LABORAL</th>
			        			<th width="15%">DESDE</th>
			        			<th width="15%">HASTA</th>
			        			<th width="30%">RIESGOS O PROCESOS PELIGROSOS EXPUESTOS</th>
			        		</tr>
			        	</thead>
			        	<tbody>
			        		<tr>
			        			<td>
			        				{{ Form::text('company', null, ['class'=>'form-control', 'placeholder'=>'Empresa']) }}
			        			</td>
			        			<td>
			        				{{ Form::text('activity', null, ['class'=>'form-control','placeholder'=>'Actividad']) }}
			        			</td>
			        			<td>
			        				{{ Form::date('since', null, ['class'=>'form-control','placeholder'=>'Desde', 'id' => 'since']) }}
			        			</td>
			        			<td>
			        				{{ Form::date('until', null, ['class'=>'form-control',  'placeholder'=>'Hasta', 'id' => 'until']) }}
			        			</td>
			        			<td>
			        				{{ Form::text('risks', null, ['class'=>'form-control', 'placeholder'=>'Riesgos']) }}
			        			</td>
			        		</tr>
			        		<tr>
			        			<td>
			        				{{ Form::text('company1', null, ['class'=>'form-control',  'placeholder'=>'Empresa1']) }}
			        			</td>
			        			<td>
			        				{{ Form::text('activity1', null, ['class'=>'form-control',  'placeholder'=>'Actividad']) }}
			        			</td>
			        			<td>
			        				{{ Form::date('since1', null, ['class'=>'form-control','placeholder'=>'Desde', 'id' => 'since1']) }}
			        			</td>
			        			<td>
			        				{{ Form::date('until1', null, [ 'class'=>'form-control', 'placeholder'=>'Hasta', 'id' => 'until1']) }}
			        			</td>
			        			<td>
			        				{{ Form::text('risks1', null, ['class'=>'form-control',  'placeholder'=>'Riesgos']) }}
			        			</td>
			        		</tr>
			        		<tr>
			        			<td>
			        				{{ Form::text('company2', null, ['class'=>'form-control',  'placeholder'=>'Empresa2']) }}
			        			</td>
			        			<td>
			        				{{ Form::text('activity2', null, ['class'=>'form-control',  'placeholder'=>'Actividad']) }}
			        			</td>
			        			<td>
			        				{{ Form::date('since2', null, ['class'=>'form-control','placeholder'=>'Desde','id' => 'since2']) }}
			        			</td>
			        			<td>
			        				{{ Form::date('until2', null, [ 'class'=>'form-control', 'placeholder'=>'Hasta', 'id' => 'until2']) }}
			        			</td>
			        			<td>
			        				{{ Form::text('risks2', null, ['class'=>'form-control',  'placeholder'=>'Riesgos']) }}
			        			</td>
			        		</tr>
			        	</tbody>
		        	</table>
		        </div>   
        	</div>
      	</div>
    </div>
    <div class="panel panel-warning">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">Parte 2</a>
          <p class="pull-right">Antecedentes Ocupacionales</p>

        </h4>
      </div>
      <div id="collapse2" class="panel-collapse collapse">
        <div class="panel-body">
        	<div class="table-responsive form-group">
        		<table class=" table table-bordered col-md-12">
        			<thead>
        				<tr>
	        				<th colspan="4" class="active">¿Ha Estado expuesto a los siguientes riesgos ocupacionales?</th>
	        			</tr>
	        			<tr class="active">
	        				<th rowspan="0">Agentes</th>
	        				<th>Tipo</th>
	        				<th>Descripción de la exposición</th>
	        				<th>Tiempo de Exposición</th>
	        			</tr>
        			</thead>
        			<tbody>
        				<tr>
	        				<th rowspan="6" class="active">Físicos</th>
	    					<td>
	    						<small id="nameHelp" class="form-text text-muted">Ruido</small>
			    				{{ Form::checkbox('noise', 1 ) }}
			    			</td>
	    					<td>
	    						<small id="nameHelp" class="form-text text-muted">Exp. Aguda</small>
			    				{{ Form::checkbox('noise_acute', 1 ) }}<br>
			    				<small id="nameHelp" class="form-text text-muted">Exp. Crónica</small>
			    				{{ Form::checkbox('noise_chronicle', 1 ) }}
	    					</td>
	    					<td>
	    						{{ Form::text('noise_moses', null, ['class'=>'col-md-6', 'placeholder'=>'Meses']) }}<br><br>
	    						{{ Form::text('noise_year', null, ['class'=>'col-md-6', 'placeholder'=>'Años']) }}
	    					</td>
	        			</tr>
	        			<tr>
	        				<td>
	        					<small id="nameHelp" class="form-text text-muted">Calor</small>
			    				{{ Form::checkbox('hot', 1 ) }}<br>
			    			
			    				{{ Form::text('hot_temperature', null, ['class'=>'col-md-6', 'placeholder'=>'Temperatura']) }}
			    			</td>
	    					<td>
	    						<small id="nameHelp" class="form-text text-muted">Exp. Aguda</small>
			    				{{ Form::checkbox('hot_acute', 1 ) }}<br>
			    				<small id="nameHelp" class="form-text text-muted">Exp. Crónica</small>
			    				{{ Form::checkbox('hot_chronicle', 1 ) }}
	    					</td>
	    					<td>
	    						{{ Form::text('hot_moses', null, ['class'=>'col-md-6', 'placeholder'=>'Meses']) }}<br><br>
	    						{{ Form::text('hot_year', null, ['class'=>'col-md-6', 'placeholder'=>'Años']) }}
	    					
	    					</td>
	        			</tr>
	        			<tr>
	        				<td>
	        					<small id="nameHelp" class="form-text text-muted">Frio</small>
			    				{{ Form::checkbox('cool', 1 ) }}<br>
			    			
			    				{{ Form::text('cool_temperature', null, ['class'=>'col-md-6', 'placeholder'=>'Temperatura']) }}
	        				</td>
	    					<td>
	    						<small id="nameHelp" class="form-text text-muted">Exp. Aguda</small>
			    				{{ Form::checkbox('cool_acute', 1 ) }}<br>
			    				<small id="nameHelp" class="form-text text-muted">Exp. Crónica</small>
			    				{{ Form::checkbox('cool_chronicle', 1 ) }}
	    					</td>
	    					<td>
	    						{{ Form::text('cool_moses', null, ['class'=>'col-md-6', 'placeholder'=>'Meses']) }}<br><br>
	    						{{ Form::text('cool_year', null, ['class'=>'col-md-6', 'placeholder'=>'Años']) }}
	    					</td>
	        			</tr>
	        			<tr>
	        				<td>
	        					<small id="nameHelp" class="form-text text-muted">Vibraciones</small>
			    				{{ Form::checkbox('vibrations', 1 ) }}
			    			</td>
	    					<td>
	    						<small id="nameHelp" class="form-text text-muted">Cuerpo Entero</small>
			    				{{ Form::checkbox('vibrations_body', 1 ) }}<br>
			    				<small id="nameHelp" class="form-text text-muted">Segmentaria</small>
			    				{{ Form::checkbox('vibrations_segmental', 1 ) }}<br>
	    						<small id="nameHelp" class="form-text text-muted">Exp. Aguda</small>
			    				{{ Form::checkbox('vibrations_acute', 1 ) }}<br>
			    				<small id="nameHelp" class="form-text text-muted">Exp. Crónica</small>
			    				{{ Form::checkbox('vibrations_chronicle', 1 ) }}
	    					</td>
	    					<td>
	    						{{ Form::text('vibrations_moses', null, ['class'=>'col-md-6', 'placeholder'=>'Meses']) }}<br><br>
	    						{{ Form::text('vibrations_year', null, ['class'=>'col-md-6', 'placeholder'=>'Años']) }}
	    					</td>
	        			</tr>
	        			<tr>
	        				<td>
	        					<small id="nameHelp" class="form-text text-muted">Radiaciones Ionizantes</small>
			    				{{ Form::checkbox('ionizing_radiation', 1 ) }}
			    			</td>
	    					<td>
	    						{{ Form::text('ionizing_type', null, ['class'=>'col-md-6', 'placeholder'=>'Tipo']) }}
	    					</td>
	    					<td>
	    						{{ Form::text('ionizing_moses', null, ['class'=>'col-md-6', 'placeholder'=>'Meses']) }}<br><br>
	    						{{ Form::text('ionizing_year', null, ['class'=>'col-md-6', 'placeholder'=>'Años']) }}
	    					</td>
	        			</tr>
	        			<tr>
	        				<td>
	        					<small id="nameHelp" class="form-text text-muted">Radiaciones no Ionizantes</small>
			    				{{ Form::checkbox('no_ionizing_radiation', 1 ) }}
			    			</td>
	    					<td>
	    						{{ Form::text('no_ionizing_type', null, ['class'=>'col-md-6', 'placeholder'=>'Tipo']) }}
	    					</td>
	    					<td>
	    						{{ Form::text('no_ionizing_moses', null, ['class'=>'col-md-6', 'placeholder'=>'Meses']) }}<br><br>
	    						{{ Form::text('no_ionizing_year', null, ['class'=>'col-md-6', 'placeholder'=>'Años']) }}
	    					</td>
	        			</tr>
	        			<tr>
	        				<th rowspan="5" class="active">Químicos</th>
	    					<td>12</td>
	    					<td>12</td>
	    					<td>12</td>
	        			</tr>
	        			<tr>
	        				<td>12</td>
	    					<td>12</td>
	    					<td>12</td>
	        			</tr>
	        			<tr>
	        				<td>12</td>
	    					<td>12</td>
	    					<td>12</td>
	        			</tr>
	        			<tr>
	        				<td>12</td>
	    					<td>12</td>
	    					<td>12</td>
	        			</tr>
	        			<tr>
	        				<td>12</td>
	    					<td>12</td>
	    					<td>12</td>
	        			</tr>
	        			<tr>
	        				<th rowspan="8" class="active">Disergonómico</th>
	    					<td>12</td>
	    					<td>12</td>
	    					<td>12</td>
	        			</tr>
	        			<tr>
	        				<td>12</td>
	    					<td>12</td>
	    					<td>12</td>
	        			</tr>
	        			<tr>
	        				<td>12</td>
	    					<td>12</td>
	    					<td>12</td>
	        			</tr>
	        			<tr>
	        				<td>12</td>
	    					<td>12</td>
	    					<td>12</td>
	        			</tr>
	        			<tr>
	        				<td>12</td>
	    					<td>12</td>
	    					<td>12</td>
	        			</tr>
	        			<tr>
	        				<td>12</td>
	    					<td>12</td>
	    					<td>12</td>
	        			</tr>
	        			<tr>
	        				<td>12</td>
	    					<td>12</td>
	    					<td>12</td>
	        			</tr>
	        			<tr>
	        				<td>12</td>
	    					<td>12</td>
	    					<td>12</td>
	        			</tr>
	        			<tr>
	        				<th class="active">Biológicos</th>
	    					<td>12</td>
	    					<td>12</td>
	    					<td>12</td>
	        			</tr>
	        			<tr>
	        				<th class="active">Mecánicos</th>
	    					<td>12</td>
	    					<td>12</td>
	    					<td>12</td>
	        			</tr>
	        			<tr>
	        				<th class="active">Otros</th>
	    					<td>12</td>
	    					<td>12</td>
	    					<td>12</td>
	        			</tr>
        			</tbody>        			
        		</table>
        	</div>			
        </div>
      </div>
    </div>
  </div> 
  <div class="form-group">
    {{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']) }}
    <a class="btn btn-danger btn-sm" onclick="javascript:history.back();"><i class=""></i>Cancelar</a>
  </div>
