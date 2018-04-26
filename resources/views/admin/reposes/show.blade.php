@extends('layouts.app')

@section('content')
<div class="container">
    <div class="panel panel-info">
  <!-- Default panel contents -->
      <div class="panel-heading">
        <b>Reposo</b>
        <a class="pull-right" href="{{ route('reposos.index') }}">
          <span class="" aria-hidden="true"></span>
          Regresar
        </a>
      </div>

        <table class="table">
            <tr>
                <th colspan="2">Nombre del Paciente</th>              
            </tr>
            <tr>
                <td colspan="2">{{ $reposes->people->full_name }}</td>
            </tr>       
            <tr>
              <th colspan="2">Motivo del Reposo</th>
            </tr>
            <tr>
              <td colspan="2">{{ $reposes->pathology }}</td>
            </tr>
            <tr>
              <th>Fecha de Inicio</th><th>Fecha de Vencimiento</th>
            </tr>
            <tr>
              <td>{{ Carbon\Carbon::parse($reposes->since)->format('d-m-Y') }}</td><td>{{ Carbon\Carbon::parse($reposes->until)->format('d-m-Y') }}</td>
            </tr>
            <tr>
              <th>Medico que Emite el Reposo</th><th>Medico que Valida</th>
            </tr>
            <tr>
              <td>{{ $reposes->doctor_issues }}</td><td>{{ $reposes->valid_doctor }}</td>
            </tr>
            <tr>
              <th>Especialidad</th><th>Total de Dias de Reposo</th>
            </tr>
            <tr>
              <td>{{ $reposes->specialty }}</td><td><label class="label label-success">{{ $reposes->rest_days }}</label></td>
            </tr>
        </table>
    </div>

</div>


@endsection