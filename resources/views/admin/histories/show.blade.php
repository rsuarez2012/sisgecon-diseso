@extends('layouts.app')

@section('content')
<div class="container">
    <div class="panel panel-info">
  <!-- Default panel contents -->
      <div class="panel-heading">
            <h4>Numero de Historia Medica: {{ $history->people->history }}</h4>
      </div>

      <div class="panel-body">
        <table class="table">
          <tr>
            <th colspan="7" style="text-align: center;">Parte I</th>
          </tr>
          <tr>
            <th>TITULAR Y C.I</th> 
            <th>EDAD</th>
            <th>DIRECCIÓN</th>
            
          </tr>
          <tr>
            <td>{{ $history->people->full_name }}</td>
            <td>{{ $history->people->birthdate }}</td>
            <td>{{ $history->people->address }}</td>
            
          </tr>  
          <tr>
            <th>TELEFONO</th>
            <th>DEPENDENCIA</th>
            <th>FECHA DE REGISTRO</th>
          </tr>
          <tr>
            <td>{{ $history->people->cellphone }}</td>
            <td>{{ $history->people->dependencies->info }}</td>
            <td>{{ $history->created_at }}</td>
          </tr>
          <tr>
            <td colspan="7">
              <div class="panel-group" id="accordion">
          <div class="panel panel-danger">
            <div class="panel-heading">
              <h4 class="panel-title" style="text-align: center;">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">Parte 2</a>
                
              </h4>
            </div>
            <div id="collapse1" class="panel-collapse collapse ">
              <div class="panel-body">
                
              </div>
                
            </div>
          </div>
          <div class="panel panel-success">
            <div class="panel-heading">
              <h4 class="panel-title" style="text-align: center;">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">Parte 3</a>
              </h4>
            </div>
            <div id="collapse2" class="panel-collapse collapse ">
              <div class="panel-body">
                
              </div>
                
            </div>
          </div>
      </div>
            </td>
            

          </tr>   
           
        </table>



        
       
  

        
    </div>

</div>


@endsection