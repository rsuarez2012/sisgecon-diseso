@extends('layouts.app')

@section('content')
<div class="container">
    <div class="panel panel-info">
  <!-- Default panel contents -->
      <div class="panel-heading">
            <h4>Numero de Historia Ocupacional: {{ $occupational->people->history }}</h4>
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
            <td>{{ $occupational->people->full_name }}</td>
            <td>{{ $occupational->people->birthdate }}</td>
            <td>{{ $occupational->people->address }}</td>
            
          </tr>  
          <tr>
            <th>TELEFONO</th>
            <th>DEPENDENCIA</th>
            <th>FECHA DE REGISTRO</th>
          </tr>
          <tr>
            <td>{{ $occupational->people->cellphone }}</td>
            <td>{{ $occupational->people->dependencies->info }}</td>
            <td>{{ $occupational->created_at }}</td>
          </tr>
          <tr>
            
          </tr>           
        </table>     
        <table class="table table-bordered col-md-12">
            <thead>
              
              <tr>
                <th colspan="5" class="active" style="text-align: center;">
                  Trabajos Anteriores
                </th>
              </tr>
                <tr class="active">
                  <th width="18%">EMPRESA</th>
                  <th width="22%">ACTIVIDAD LABORAL</th>
                  <th width="15%">DESDE</th>
                  <th width="15%">HASTA</th>
                  <th width="30%">RIESGOS O PROCESOS PELIGROSOS EXPUESTOS</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                  <td>
                    {{ $occupational->company }}
                  </td>
                  <td>
                    {{ $occupational->activity }}
                  </td>
                  <td>
                    {{ $occupational->since }}
                  </td>
                  <td>
                    {{ $occupational->until }}
                  </td>
                  <td>
                   {{ $occupational->risks }}
                  </td>
                </tr>
                <tr>
                  <td>
                    {{ $occupational->company1 }}
                  </td>
                  <td>
                    {{ $occupational->activity1 }}
                  </td>
                  <td>
                    {{ $occupational->since1 }} 
                  </td>
                  <td>
                    {{ $occupational->until1 }}
                  </td>
                  <td>
                    {{ $occupational->risks1 }}
                  </td>
                </tr>
                <tr>
                  <td>
                    {{ $occupational->company2 }}
                  </td>                  
                  <td>
                    {{ $occupational->activity2 }}
                  </td>
                  <td>
                    {{ $occupational->since2 }}
                  </td>
                  <td>
                    {{ $occupational->until2 }}
                  </td>
                  <td>
                    {{ $occupational->risks2 }}
                  </td>
                </tr>
            </tbody>
        </table>   
                <table class=" table table-bordered col-md-12">
              <thead>
                <tr>
                  <th colspan="4" class="active">¿Ha Estado expuesto a los siguientes riesgos ocupacionales?</th>
                </tr>
                <tr class="active">
                  <th rowspan="0">Agentes</th>
                  <th>Tipo</th>
                  <th>Descripción de la exposición</th>
                  <th>Tiempo de Exposición</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th rowspan="6" class="active">Físicos</th>
                    <td>
                       Ruido: {{ $occupational->noise }} 
                    </td>
                    <td>
                       Exp. Aguda: {{ $occupational->noise_acute }} <br>
                       Exp. Crónica: {{ $occupational->noise_chronicle }} 

                    </td>
                    <td>
                        Meses: {{ $occupational->noise_moses }} <br>
                        Años: {{ $occupational->noise_year }} 
                    </td>
                </tr>
                <tr>
                    <td>
                        Calor: {{ $occupational->hot }} Temperatura °C: {{ $occupational->hot_temperature }}
                    </td>
                    <td>
                       Exp. Aguda: {{ $occupational->hot_acute }} <br>
                       Exp. Crónica: {{ $occupational->hot_chronicle }} 

                    </td>
                    <td>
                        Meses: {{ $occupational->hot_moses }} <br>
                        Años: {{ $occupational->hot_year }} 
                    </td>
                </tr>
                <tr>
                    <td>
                        Frio: {{ $occupational->cool }} Temperatura °C: {{ $occupational->cool_temperature }} 
                    </td>
                    <td>
                       Exp. Aguda: {{ $occupational->cool_acute }} <br>
                       Exp. Crónica: {{ $occupational->cool_chronicle }} 

                    </td>
                    <td>
                        Meses: {{ $occupational->cool_moses }} <br>
                        Años: {{ $occupational->cool_year }} 
                    </td>
                </tr>
                <tr>
                    <td>
                        Vibraciones:{{ $occupational->vibrations }} 
                    </td>
                    <td>
                        Cuerpo Entero: {{ $occupational->vibrations_body }} <br>
                        Segmentaria: {{ $occupational->vibrations_segmental }} <br>
                        Exp. Aguda: {{ $occupational->vibrations_acute }} <br>
                        Exp. Crónica: {{ $occupational->vibrations_chronicle }} 

                    </td>
                    <td>
                        Meses: {{ $occupational->vibrations_moses }} <br>
                        Años: {{ $occupational->vibrations_moses }} 
                    </td>
                </tr>
                <tr>
                    <td>
                        Radiaciones Ionizantes: {{$occupational->ionizing_radiation }} 
                    </td>
                    <td>
                        Tipo: {{ $occupational->ionizing_type }} 
                    </td>
                    <td>
                        Meses: {{ $occupational->ionizing_moses }} <br>
                        Años: {{ $occupational->ionizing_year }} 
                    </td>
                </tr>
                <tr>
                    <td>
                        Radiaciones No Ionizantes: {{ $occupational->no_ionizing_radiation }} 
                    </td>
                    <td>
                        Tipo: {{ $occupational->no_ionizing_type }} 
                    </td>
                    <td>
                        Meses: {{ $occupational->no_ionizing_moses }} <br>
                        Años: {{ $occupational->no_ionizing_year }} 
                    </td>
                </tr>
                <tr>
                  <th rowspan="5" class="active">Químicos</th>
                    <td>
                      {{-- $occupational-> --}} 
                    </td>
                    <td>
                      {{-- $occupational-> --}} 
                    </td>
                        <td>
                            Meses: {{ $occupational->noise_moses }} <br>
                            Años: {{ $occupational->noise_year }} 
                        </td>
                    </tr>
                    <tr>
                      <td>
                       {{-- $occupational-> --}}  
                    </td>
                    <td>
                      {{-- $occupational-> --}} 
                    </td>
                        <td>
                            Meses: {{ $occupational->noise_moses }} <br>
                            Años: {{ $occupational->noise_year }} 
                        </td>
                    </tr>
                    <tr>
                      <td>
                        {{-- $occupational-> --}} 
                      </td>
                    <td>
                      {{-- $occupational-> --}} 
                    </td>
                        <td>
                            Meses: {{ $occupational->noise_moses }} <br>
                            Años: {{ $occupational->noise_year }} 
                        </td>
                    </tr>
                    <tr>
                      <td>
                       {{-- $occupational-> --}} 
                      </td>
                    <td>
                      
                    </td>
                        <td>
                            Meses: {{ $occupational->noise_moses }} <br>
                            Años: {{ $occupational->noise_year }} 
                        </td>
                    </tr>
                    <tr>
                      <td>
                        {{-- $occupational-> --}} 
                      </td>
                    <td>
                      {{-- $occupational-> --}} 
                    </td>
                    <td>
                        Meses: {{ $occupational->noise_moses }} <br>
                        Años: {{ $occupational->noise_year }} 
                    </td>
                </tr>
                <tr>
                  <th rowspan="8" class="active">Disergonómico</th>
                    <td>
                      {{-- $occupational-> --}} 
                    </td>
                    <td>
                      {{-- $occupational-> --}} 
                    </td>
                    <td>
                        Meses: {{ $occupational->noise_moses }} <br>
                        Años: {{ $occupational->noise_year }} 
                    </td>
                </tr>
                <tr>
                  <td>
                    {{-- $occupational-> --}} 
                  </td>
                <td></td>
                    <td>
                        Meses: {{ $occupational->noise_moses }} <br>
                        Años: {{ $occupational->noise_year }} 
                    </td>
                </tr>
                <tr>
                  <td>
                    {{-- $occupational-> --}} 
                  </td>
                <td></td>
                    <td>
                        Meses: {{ $occupational->noise_moses }} <br>
                        Años: {{ $occupational->noise_year }} 
                    </td>
                </tr>
                <tr>
                  <td>
                    {{-- $occupational-> --}} 
                  </td>
                <td></td>
                    <td>
                        Meses: {{ $occupational->noise_moses }} <br>
                        Años: {{ $occupational->noise_year }} 
                    </td>
                </tr>
                <tr>
                  <td>
                    {{-- $occupational-> --}} 
                  </td>
                <td>
                  {{-- $occupational-> --}} 
                </td>
                    <td>
                        Meses: {{ $occupational->noise_moses }} <br>
                        Años: {{ $occupational->noise_year }} 
                    </td>
                </tr>
                <tr>
                  <td>
                    {{-- $occupational-> --}} 
                  </td>
                <td>
                  {{-- $occupational-> --}} 
                </td>
                    <td>
                        Meses: {{ $occupational->noise_moses }} <br>
                        Años: {{ $occupational->noise_year }} 
                    </td>
                </tr>
                <tr>
                  <td>
                    {{-- $occupational-> --}} 
                  </td>
                <td>
                  {{-- $occupational-> --}} 
                </td>
                    <td>
                        Meses: {{ $occupational->noise_moses }} <br>
                        Años: {{ $occupational->noise_year }} 
                    </td>
                </tr>
                <tr>
                  <td>
                    {{-- $occupational-> --}} 
                  </td>
                <td>
                  {{-- $occupational-> --}} 
                </td>
                    <td>
                        Meses: {{ $occupational->noise_moses }} <br>
                        Años: {{ $occupational->noise_year }} 
                    </td>
                </tr>
                <tr>
                  <th class="active">Biológicos</th>
                <td>
                  {{-- $occupational-> --}} 
                </td>
                <td>
                  {{-- $occupational-> --}} 
                </td>
                    <td>
                        Meses: {{ $occupational->noise_moses }} <br>
                        Años: {{ $occupational->noise_year }} 
                    </td>
                </tr>
                <tr>
                  <th class="active">Mecánicos</th>
                <td>
                 {{-- $occupational-> --}} 
                </td>
                <td></td>
                    <td>
                       Exp. Aguda: {{ $occupational->noise_acute }} <br>
                       Exp. Crónica: {{ $occupational->noise_chronicle }} 

                    </td>
                </tr>
                <tr>
                  <th class="active">Otros</th>
                <td>
                  {{-- $occupational-> --}} 
                </td>
                <td>
                  {{-- $occupational-> --}} 
                </td>
                <td>
                  {{-- $occupational-> --}} 
                </td>
                </tr>
                <tr>
                  <th colspan="4">Preguntas Adicionales</th>
                </tr>
                <tr>
                  <td colspan="2">
                {{-- $occupational-> --}} 
                  </td>
                  <td colspan="2">
                    {{-- $occupational-> --}} 
                  </td>
                </tr>
                <tr>
                  <td colspan="2">
                  {{-- $occupational-> --}} 
                  </td>
                  <td colspan="2">
                    {{-- $occupational-> --}} 
                  </td>
                </tr>
                <tr>
                  <td colspan="2">
                {{-- $occupational-> --}} 
                  </td>
                  <td colspan="2">
                {{-- $occupational-> --}} 
                  </td>
                </tr>
                <tr>
                  <td colspan="4">
                {{-- $occupational-> --}}
                  </td>
                </tr>
              </tbody>              
        </table> 
    </div>
</div>


@endsection