@extends('layouts.app')

@section('content')
<div class="container">
    <div class="panel panel-info">
  <!-- Default panel contents -->
      <div class="panel-heading">
        <b>Dependencia</b>
        <a class="pull-right" href="{{ route('dependencias.index') }}">
          <span class="glyphicon glyphicon-arrow-left" aria-hidden="true"></span>
          Regresar
        </a>
      </div>

        <table class="table">
            <tr>
                <th>Nombre</th>              
            </tr>
            <tr>
                <td>{{ $dependency->dependency }}</td>
            </tr>       
            
        </table>
    </div>

</div>


@endsection