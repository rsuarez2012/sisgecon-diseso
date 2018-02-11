@extends('layouts.app')

@section('content')
<div class="container">
    <div class="panel panel-info">
  <!-- Default panel contents -->
      <div class="panel-heading">
        <h4>Titular: {{ $beneficiary->people->full_name }}</h4>
      </div>

        <table class="table">
            <tr>
                <th>Nombre</th>
                <th>Apellido</th>       

            </tr>
            <tr>
                <td>{{ $beneficiary->first_name }}</td>
                <td>{{ $beneficiary->last_name }}</td>

            </tr>       
            <tr>
                <th>Cedula</th> 
                <th>Fecha de Nacimiento</th> 
                
            </tr>
            <tr>
                <td>{{ $beneficiary->dni }}</td>
                <td>{{ Carbon\Carbon::parse($beneficiary->birthdate)->format('d-m-Y') }}</td>
                
            </tr>
            <tr>
                <th>Parentesco</th>
                <th>Sexo</th>
            </tr>
            <tr>
                <td>{{ $beneficiary->type_relationship }}</td>
                <td>{{ $beneficiary->gender }}</td>
            </tr>
            
          <tr>
            <td colspan="2">
                <a href="{{ route('beneficiarios.edit', $beneficiary->id) }}" class="btn btn-success btn-sm">Editar</a>
                <a class="btn btn-danger btn-sm" onclick="javascript:history.back();"><i class=""></i>Cancelar</a>
            </td>
          </tr>
        </table>
    </div>

</div>


@endsection