<div class="form-group">
  
    {{-- Form::text('people_id', null, ['class' => 'form-control', 'id' => 'people_id']) --}}
        {{ Form::select('people_id', $peoples, null, ['tabindex' => 5,'class' => 'form-control people', 'id' => 'people_id','placeholder' => 'Seleccione el Titular...']) }}
        <small id="nameHelp" class="form-text text-muted">Titular</small>
    
  
                  <!--<label class="col-sm-3 control-label">Titular</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" id="people_id" name="people_id">
                  </div>-->
</div>
<div class="form-group">
     {{-- Form::select('beneficiary_id',null, is_null($appointment)?'':$appointment->beneficiary_id, ['tabindex' => 5,'class' => 'form-control people', 'id' => 'beneficiary_id']) --}}
    <select name="beneficiary_id" id="beneficiary_id" class="form-control beneficiary">
        <option value="0" disabled="true" selected="true">===Seleccione el Beneficiario===</option>
    </select>
    <small id="nameHelp" class="form-text text-muted">Beneficiario</small>
                  <!--<label class="col-sm-3 control-label">Beneficiario</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" id="beneficiary_id" name="beneficiary_id">
                  </div>-->
</div>
<div class="form-group">
    {{ Form::select('speciality_id', $specialists, null, ['tabindex' => 5,'class' => 'form-control specialists', 'id' => 'speciality_id','placeholder' => 'Seleccione el Medico Especialista...']) }}
    
    <small id="nameHelp" class="form-text text-muted">Especialista</small>
                  <!--<label class="col-sm-3 control-label">Especialista</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" id="speciality_id" name="speciality_id">
                  </div>-->
</div>
                <div class="modal-footer">
    
     <!--<div class="form-group">-->
      <button type="button" class="btn btn-default antoclose" data-dismiss="modal">Cerrar</button>
      {{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']) }}
    <!--</div>-->
  </div>