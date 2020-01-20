@extends('layouts.app')

@section('content')
<div class="container">
    <div class="panel panel-info">
  <!-- Default panel contents -->
      <div class="panel-heading">
        <b>Memorando</b>
        <a class="pull-right" href="{{ route('memorando.index') }}">
          <span class="glyphicon glyphicon-arrow-left" aria-hidden="true"></span>
          Regresar
        </a>
      </div>
        <table class="table">
            <tr>
                <th>Memorando numero</th>              
                <th>Para</th>              
                <th>Asunto</th>              
                <th>Fecha</th>              
            </tr>
            <tr>
              <td>{{ str_pad($communication->number,3,'0',STR_PAD_LEFT) }}</td>
              <td>{{ $communication->dependency_id }}</td>
              <td>{{ $communication->affair }}</td>
              <td>{{ Carbon\Carbon::parse($communication->date)->format('d-m-Y') }}</td>
            </tr> 
            <tr>
              <th colspan="4"><center>Cuerpo</center></th>
            </tr>
            <tr>
              <td colspan="4">{{ $communication->body }}</td>
            </tr>
            <tr>
              <th>Director(a)</th>
              <th>Copias A</th>
              <th>Anexos</th>
              <th></th>
            </tr>   
            <tr>
              <td>{{ $communication->executive->full_name }}</td>
              <td></td>
              <td></td>
              <td></td>
            </tr>
        </table>
    </div>

</div>


@endsection