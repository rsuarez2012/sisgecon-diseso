@extends('layouts.app')

@section('content')
<div class="container">
    <div class="panel panel-info">
  <!-- Default panel contents -->
      <div class="panel-heading">
            <h4>Carga Familiar del titular: {{ $people->full_name }}</h4>
        
        
      </div>

        <table class="table">
            <tr>
                <th>Id</th>
                <th>Beneficiario</th> 
                <th>Fecha de Nacimiento</th>
                <th>Parentesco</th>
            </tr>
            @foreach($cargas as $carga)
            <tr>
                <td>{{ $carga->id }}</td>
                <td>{{ $carga->first_name }} {{ $carga->last_name }}</td>
                <td>{{ Carbon\Carbon::parse($carga->birthdate)->format('d-m-Y') }}</td>
                <td>{{ $carga->type_relationship }}</td>
                
            </tr>
            @endforeach
            <tr>
            <td colspan="4">
                <a class="btn btn-danger btn-sm" onclick="javascript:history.back();"><i class=""></i>Regresar</a>
            </td>
          </tr>
        </table>
    </div>

</div>


@endsection