@extends('layouts.app')

@section('content')
<div class="container">
    <div class="panel panel-info">
  <!-- Default panel contents -->
      <div class="panel-heading">
        <h4>{{ $person->dni.' - '.$person->first_name.' '.$person->last_name }}</h4>
      </div>

        <table class="table">
            <tr>
                <th>Lugar de Nacimiento</th> 
                <th>Fecha de Nacimiento</th>

            </tr>
            <tr>
                <td>{{ $person->place_of_birth }}</td>
                <td>{{ $person->birthdate}}</td>

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
                <th colspan="2">Fecha de Ingreso</th>
                
            </tr>
            <tr>
                <td colspan="2">{{ $person->date_of_admission }}</td>
                
          </tr>
        </table>
    </div>

</div>


@endsection