@extends('layouts.app')

@section('content')
<div class="container">
    <div class="panel panel-info">
  <!-- Default panel contents -->
      <div class="panel-heading">
            <h4>{{ $person->dni.' - '.$person->first_name.' '.$person->last_name }}</h4>
        
        <a href="{{ route('titulares.beneficiarios', $person->id) }}" class="btn btn-warning btn-sm">Ver Carga Familiar</a>
        <a class="btn btn-primary btn-sm pull-right" href="{{ route('nuevo_beneficiario', [$person->id]) }}">Nuevo Beneficiario</a>
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


@endsection