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
                       Ruido: @if($occupational->noise == 1) SI @else NO @endif
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
                      Humos: {{ $occupational->fumes }} 
                    </td>
                    <td>
                        Tipos: {{ $occupational->fumes_type }} <br>
                        Exp. Aguda: {{ $occupational->fumes_acute }} <br>
                        Exp. Crónica: {{ $occupational->fumes_chronicle }} 
                    </td>
                    <td>
                        Meses: {{ $occupational->fumes_moses }} <br>
                        Años: {{ $occupational->fumes_year }} 
                    </td>
                </tr>
                <tr>
                    <td>
                        Polvos y/o fibras Orgánicas o Inorganicas: {{ $occupational->dust }}
                    </td>
                    <td>
                        Cuáles: {{ $occupational->dust_type }} <br>
                        Exp. Aguda: {{ $occupational->dust_acute }} <br>
                        Exp. Crónica: {{ $occupational->dust_chronicle }} 
                    </td>
                    <td>
                        Meses: {{ $occupational->dust_moses }} <br>
                        Años: {{ $occupational->dust_year }} 
                    </td>
                </tr>
                <tr>
                    <td>
                        Metales Pesados y Metaloides: {{ $occupational->metals }}
                    </td>
                    <td>
                        Cuáles: {{ $occupational->metals_type }} <br>
                        Exp. Aguda: {{ $occupational->metals_acute }} <br>
                        Exp. Crónica: {{ $occupational->metals_chronicle }} 
                    </td>
                    <td>
                        Meses: {{ $occupational->metals_moses }} <br>
                        Años: {{ $occupational->metals_year }} 
                    </td>
                </tr>
                <tr>
                    <td>
                        Gases y Vapores: {{ $occupational->vapors }}
                    </td>
                    <td>
                        Cuáles: {{ $occupational->vapors_type }} <br>
                        Exp. Aguda: {{ $occupational->vapors_acute }} <br>
                        Exp. Crónica: {{ $occupational->vapors_chronicle }} 
                    </td>
                    <td>
                        Meses: {{ $occupational->vapors_moses }} <br>
                        Años: {{ $occupational->vapors_year }} 
                    </td>
                </tr>
                <tr>
                    <td>
                        Solventes: {{ $occupational->solvents }} 
                    </td>
                    <td>
                        Cuáles: {{ $occupational->solvents_type }} <br>
                        Exp. Aguda: {{ $occupational->solvents_acute }} <br>
                        Exp. Crónica: {{ $occupational->solvents_chronicle }} 
                    </td>
                    <td>
                        Meses: {{ $occupational->solvents_moses }} <br>
                        Años: {{ $occupational->solvents_year }} 
                    </td>
                </tr>                    
                <tr>
                    <th rowspan="8" class="active">Disergonómico</th>
                    <td>
                        Posiciones:<br>
                        Sedestacion: {{ $occupational->sitting }}<br>
                        Prolongada: {{ $occupational->prolonged }}
                    </td>
                    <td>
                        Caracteristicas de la silla: {{ $occupational->characteristic_chair }}                      
                    </td>
                    <td>
                        Horas/Día: {{ $occupational->positions_hours }} <br>
                        Meses: {{ $occupational->positions_moses }} <br>
                        Años: {{ $occupational->positions_year }} 
                    </td>
                </tr>
                <tr>
                    <td>
                        Bipedestación:<br>
                        Prolongada: {{ $occupational->standing }}
                    </td>
                    <td>
                                             
                    </td>
                    <td>
                        Horas/Día: {{ $occupational->standing_hours }} <br>
                        Meses: {{ $occupational->standing_moses }} <br>
                        Años: {{ $occupational->standing_year }} 
                    </td>
                </tr>
                <tr>
                    <td>
                        De Rodillas: {{ $occupational->knees }}
                    </td>
                    <td>
                                             
                    </td>
                    <td>
                        Horas/Día: {{ $occupational->knees_hours }} <br>
                        Meses: {{ $occupational->knees_moses }} <br>
                        Años: {{ $occupational->knees_year }} 
                    </td>
                </tr>
                <tr>
                    <td>
                        De Cunclillas: {{ $occupational->cunnels }}
                    </td>
                    <td>
                                             
                    </td>
                    <td>
                        Horas/Día: {{ $occupational->cunnels_hours }} <br>
                        Meses: {{ $occupational->cunnels_moses }} <br>
                        Años: {{ $occupational->cunnels_year }} 
                    </td>
                </tr>
                <tr>
                    <td>
                        Manipulación manual de carga<br>
                        Levantamiento de <br>
                        Peso: {{ $occupational->load }} Kg
                    </td>
                    <td>
                        Tipo de Objeto: {{ $occupational->load_type }} <br>
                        Frecuencia de Levantamiento: {{ $occupational->load_frecuncy }}                  
                    </td>
                    <td>
                        Horas/Día: {{ $occupational->load_hours }} <br>
                        Meses: {{ $occupational->load_moses }} <br>
                        Años: {{ $occupational->load_year }} 
                    </td>
                </tr>
                <tr>
                    <td>
                        Traslado Manual: {{ $occupational->transfer }}
                    </td>
                    <td>
                        Tipo de Objeto: {{ $occupational->transfer_type }} <br>
                        Peso: {{ $occupational->transfer_weight }} Kg<br>
                        Distancia aprox: {{ $occupational->transfer_distance }} mts <br>
                        Frecuencia: {{ $occupational->transfer_frecuncy }}                  
                    </td>
                    <td>
                        Horas/Día: {{ $occupational->transfer_hours }} <br>
                        Meses: {{ $occupational->transfer_moses }} <br>
                        Años: {{ $occupational->transfer_year }} 
                    </td>
                </tr>
                <tr>
                    <td>
                        Halar o Empujar:<br>
                        Peso:{{ $occupational->push }}  Kg
                    </td>
                    <td>
                        Tipo de Objeto: {{ $occupational->push_type }} <br>
                        Peso: {{ $occupational->push_weight }} Kg<br>
                        Distancia aprox: {{ $occupational->push_distance }} mts <br>
                        Frecuencia: {{ $occupational->push_frecuncy }}                  
                    </td>
                    <td>
                        Horas/Día: {{ $occupational->push_hours }} <br>
                        Meses: {{ $occupational->push_moses }} <br>
                        Años: {{ $occupational->push_year }} 
                    </td>
                </tr>
                <tr>
                    <td>
                        Movimientos Repetitivos:{{ $occupational->moves }}  Kg
                    </td>
                    <td>
                        Parte del Cuerpo: {{ $occupational->moves_body }} <br>
                        Frecuencia: {{ $occupational->moves_frecuncy }}                  
                    </td>
                    <td>
                        Horas/Día: {{ $occupational->moves_hours }} <br>
                        Meses: {{ $occupational->moves_moses }} <br>
                        Años: {{ $occupational->moves_year }} 
                    </td>
                </tr>
                <tr>
                    <th class="active">Biológicos</th>
                    <td>
                        Orgánicos: {{ $occupational->organic }}<br>
                        Inorgánicos:{{ $occupational->inorganic }}
                    </td>
                    <td>
                        Exp. a Animales/insectos: {{ $occupational->animals }} <br>
                        
                        Contactos con Desechos: {{ $occupational->waste }}                  
                    </td>
                    <td>
                        Horas/Día: {{ $occupational->biologic_hours }} <br>
                        Meses: {{ $occupational->biologic_moses }} <br>
                        Años: {{ $occupational->biologic_year }} 
                    </td>
                </tr>
                <tr>
                    <th class="active">Mecánicos</th>
                    <td>
                        Trabajo en altura: {{ $occupational->work }}<br>
                        Equipos sin guarda: {{ $occupational->guard }}<br>
                        Otros:{{ $occupational->others }}
                    </td>
                    <td>                 
                    </td>
                    <td>
                        Horas/Día: {{ $occupational->work_biologic_hours }} <br>
                        Meses: {{ $occupational->work_biologic_moses }} <br>
                        Años: {{ $occupational->work_biologic_year }} 
                    </td>
                </tr>
                <tr>
                    <th class="active">Otros</th>
                    <td>
                        {{ $occupational->other_type }}
                    </td>
                    <td> 
                        {{ $occupational->other_description }}                
                    </td>
                    <td>
                        Horas/Día: {{ $occupational->other_time }} 
                    </td>
                </tr>
                <tr>
                    <th colspan="4" class="active">
                        Preguntas Adicionales
                     </th>
                </tr>
                <tr>
                    <td colspan="2">
                        ¿Ha sufrido accidentes de trabajo ? {{ $occupational->accident }} 
                    </td>
                    <td colspan="2">
                        ¿Qué parte del cuerpo se lesionó? {{ $occupational->body_part }} 
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        Fecha del accidente: {{ $occupational->accident_date }} 
                    </td>
                    <td colspan="2">
                        Dejó alguna secuelas el accidente? {{ $occupational->aftermath }} 
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        Ha padecido o padece de enfermedad ocupacional? {{ $occupational->occupational_disease }} 
                    </td>
                    <td colspan="2">
                        Fue certificada por el INPSASEL ? {{ $occupational->inpsasel }} 
                    </td>
                </tr>
                <tr>
                    <td colspan="4">
                        Cambia de trabajo con frecuencia ? {{ $occupational->change_work }}
                    </td>
                </tr>
            </tbody>              
        </table> 
    </div>
</div>


@endsection