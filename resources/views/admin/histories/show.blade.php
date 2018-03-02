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
                  <div id="collapse1" class="panel-collapse collapse "><!--Collapse 1-->
                    <div class="panel-body">
                      <div class="col-md-4">
                        <div class="panel panel-info">
                          <div class="panel-heading">
                            <p class="panel-title" align="center">Antecedentes Personales</p>
                          </div>                      
                            <p align="center">{{ $history->personal_history}}</p>
                        </div>                      
                      </div>
                      <div class="col-md-4">
                        <div class="panel panel-info">
                          <div class="panel-heading">
                            <p class="panel-title" align="center">Antecedentes Madre</p>
                          </div>                      
                            <p align="center">{{ $history->mon_history }}</p>
                        </div>                      
                      </div>
                      <div class="col-md-4">
                        <div class="panel panel-info">
                          <div class="panel-heading">
                            <p class="panel-title" align="center">Antecedentes Padre</p>
                          </div>                      
                            <p align="center">{{ $history->dad_history }}</p>
                        </div>                      
                      </div>
                      <br>
                      <div class="col-md-4">
                        <div class="panel panel-warning">
                          <div class="panel-heading">
                            <p class="panel-title" align="center">Antecedentes Hermanos</p>
                          </div>                      
                            <p align="center">{{ $history->brot_history }}</p>
                        </div>                      
                      </div>
                      <div class="col-md-4">
                        <div class="panel panel-warning">
                          <div class="panel-heading">
                            <p class="panel-title" align="center">Antecedentes Hijo</p>
                          </div>                      
                            <p align="center">{{ $history->sons_history }}</p>
                        </div>                      
                      </div>
                      <div class="col-md-4">
                        <div class="panel panel-warning">
                          <div class="panel-heading">
                            <p class="panel-title" align="center">Antecedentes Ginecologicos</p>
                          </div>                      
                            <p align="center">{{ $history->gynecology }}</p>
                        </div>                      
                      </div>
                      <br>
                      <div class="col-md-12">
                        <div class="panel panel-success">
                          <div class="panel-heading">
                            <p class="panel-title" align="center">Habitos Psicobiologicos</p>
                          </div>
                          <div class="panel-body">
                            <div class="col-md-3">
                              Alcohol: {{ $history->alcohol }}
                            </div>
                            <div class="col-md-3">
                              Cigarrillos: {{ $history->cigarettes }}
                            </div>
                            <div class="col-md-3">
                              Cafe: {{ $history->cofe }}
                            </div>
                            <div class="col-md-3">
                              Tabaco: {{ $history->tobacco }}
                            </div>
                          </div>
                        </div>                      
                      </div>                    
                    </div>
                  </div> <!--FIn Collapse 1-->
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