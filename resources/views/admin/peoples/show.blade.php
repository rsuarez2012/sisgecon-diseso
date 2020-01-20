@extends('layouts.app')

@section('content')
<div class="container">
    <div class="panel panel-info">
  <!-- Default panel contents -->
      <div class="panel-heading">
            <h4>{{ $person->dni.' - '.$person->first_name.' '.$person->last_name }}</h4>
        
        <a href="{{ route('titulares.beneficiarios', $person->id) }}" class="btn btn-warning btn-sm">Ver Carga Familiar</a>
        <!--<a class="btn btn-primary btn-sm pull-right" href="{{-- route('nuevo_beneficiario', [$person->id]) --}}">Nuevo Beneficiario</a>-->
        <button type="button" class="btn btn-primary btn-sm pull-right" data-toggle="modal" data-target=".bs-example-modal-lg">Nuevo Beneficiario</button>
      </div>

        <table class="table">
            <tr>
                <th>Lugar de Nacimiento</th> 
                <th>Fecha de Nacimiento</th>

            </tr>
            <tr>
                <td>{{ $person->place_of_birth }}</td>
                <td>{{ Carbon\Carbon::parse($person->birthdate)->format('d-m-Y') }}</td>

            </tr>       
            <tr>
                <th>Estado Civil</th>
                <th>Dirección</th>
            </tr>
            <tr>
                <td>{{ $person->status_marital }}</td>
                <td>{{ $person->address }}</td>
            </tr>
            <tr>
                <th>Telefono</th>
                <th>Telefono Celular</th>
            </tr>
            <tr>
                <td>{{ $person->telephone }}</td>
                <td>{{ $person->cellphone }}</td>
            </tr>
            <tr>
                <th>Sexo</th>
                <th>Email</th>
            </tr>
            <tr>
                <td>{{ $person->sex }}</td>
                <td>{{ $person->email }}</td>
            </tr>
            <tr>
                <th>Tipo de Empleado</th>
                <th>Cargo</th>
            </tr>
            <tr>
                <td>{{ $person->type_employee }}</td>
                <td>{{ $person->position }}</td>
          </tr>
          <tr>
                <th>Fecha de Ingreso</th>
                <th>Dependencia Adscrita</th>
                
            </tr>
            <tr>
                <td>{{ Carbon\Carbon::parse($person->date_of_admission)->format('d-m-Y') }}</td>
                <td>{{ $person->dependencies->info }}</td>
                
          </tr>
          <tr>
            <td colspan="2">
                <a href="{{ route('titulares.edit', $person->id) }}" class="btn btn-success btn-sm">Editar</a>
                <a class="btn btn-danger btn-sm" onclick="javascript:history.back();"><i class=""></i>Cancelar</a>
            </td>
          </tr>
        </table>
    </div>

</div>

<!--modal-->
<div class="x_content">

                  <!-- modals -->
                  <!-- Large modal -->
                  

                  <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                      <div class="modal-content">

                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                          </button>
                          <h4 class="modal-title" id="myModalLabel">Nuevo Beneficiario</h4>
                        </div>
                        <div class="modal-body">
                            {!! Form::open(['route' => ['beneficiarios.store'], 'files' => true]) !!}
                                <input type="hidden" id='people_id' name="people_id" value="{{ $person->id }}">
                                @include('admin.beneficiaries.partials.form')

                            {!! Form::close() !!}
                        </div>
                        <!--<div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                          <button type="button" class="btn btn-primary">Save changes</button>
                        </div>-->

                      </div>
                    </div>
                  </div>
</div>
@section('scripts')
<script type="text/javascript">
$(document).ready(function(){
    $.fn.datepicker.dates['es'] = {
        days: ["Domingo", "Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábado", "Domingo"],
        daysShort: ["Dom", "Lun", "Mar", "Mié", "Jue", "Vie", "Sáb", "Dom"],
        daysMin: ["Do", "Lu", "Ma", "Mi", "Ju", "Vi", "Sa", "Do"],
        months: ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"],
        monthsShort: ["Ene", "Feb", "Mar", "Abr", "May", "Jun", "Jul", "Ago", "Sep", "Oct", "Nov", "Dic"],
        today: "Hoy"
    };
    $('#birthdate').datepicker({
      language: "es",
      format: "yyyy-mm-dd",
      weekStart:0,
      todayHighlight: true,
      todayBtn:true,
      orientation: "bottom right",
     
    });
    $('#date_of_admission').datepicker({
      language: "es",
      format: "yyyy-mm-dd",
      weekStart:0,
      todayHighlight: true,
      todayBtn:true,
      orientation: "bottom right",
     
    });
});
</script>
@endsection


@endsection