@extends('layouts.app')

@section('content')
<div class="container">
    <div class="panel panel-info">
  <!-- Default panel contents -->
      <div class="panel-heading">
            <h4>Dependencia</h4>
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