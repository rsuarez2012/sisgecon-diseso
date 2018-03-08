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
                              Alcohol: @if($history->alcohol == 1) SI @else NO @endif
                            </div>
                            <div class="col-md-3">
                              Cigarrillos: @if($history->cigarettes == 1) SI @else NO @endif
                            </div>
                            <div class="col-md-3">
                              Cafe: @if($history->cofe== 1) SI @else NO @endif
                            </div>
                            <div class="col-md-3">
                              Tabaco: @if($history->tobacco == 1) SI @else NO @endif
                            </div>
                          </div>
                        </div>                      
                      </div>
                      <br>
                      <div class="col-md-12">
                        <div class="panel panel-success">
                          <div class="panel-heading">
                            <p class="panel-title" align="center">Examen Funcional</p>
                          </div>
                          <div class="panel-body">
                            <div class="col-md-4">
                              <ul>
                                <li>
                                  <b>General</b>
                                  <ul>
                                    <li>Fiebre: (@if($history->fever == 1) SI @else NO @endif)</li>
                                  </ul> 
                                </li>
                                <li>
                                  <b>Nariz</b>
                                  <ul>
                                    <li>Sangrado: (@if($history->bleeding_nose == 1) SI @else NO @endif)</li>
                                    <li>Secreción: (@if($history->nose_secretion == 1) SI @else NO @endif)</li>
                                  </ul>
                                </li>
                                <li>
                                  <b>Senos</b>
                                  <ul>
                                    <li>Masas: (@if($history->breast_masses == 1) SI @else NO @endif)</li>
                                    <li>Dolor: (@if($history->breast_pain == 1) SI @else NO @endif)</li>
                                    <li>Secreción: (@if($history->breast_secretion == 1) SI @else NO @endif)</li>
                                  </ul>
                                </li>
                                <li>
                                  <b>Corazon</b>
                                  <ul>
                                    <li>Disnea: (@if($history->dyspnoa == 1) SI @else NO @endif)</li>
                                    <li>Dolor: (@if($history->heart_pain == 1) SI @else NO @endif)</li>
                                    <li>Taquicardia: (@if($history->tachycardias == 1) SI @else NO @endif)</li>
                                    <li>Opresión: (@if($history->oppression == 1) SI @else NO @endif)</li>
                                  </ul>
                                </li>
                                <li>
                                  <b>Genitales</b>
                                  <ul>
                                    <li>Hombre: (@if($history->genitals_man == 1) SI @else NO @endif)</li>
                                    <li>Mujer: (@if($history->genitals_woman == 1) SI @else NO @endif)</li>
                                  </ul>
                                </li>
                                <li>
                                  <b>Extremidades</b>
                                  <ul>
                                    <li>Dolor: (@if($history->pain_limbs == 1) SI @else NO @endif)</li>
                                    <li>Cansancio: (@if($history->extremity_fatigue == 1) SI @else NO @endif)</li>
                                    <li>pesadez: (@if($history->heaviness_tips == 1) SI @else NO @endif)</li>
                                    <li>Hinchazón: (@if($history->swelling_extremities == 1) SI @else NO @endif)</li>
                                  </ul>
                                </li>
                              </ul>                              
                            </div>

                            <div class="col-md-4">
                              <ul>
                                <li>
                                  <b>Cabeza</b>
                                  <ul>
                                    <li>Mareos: (@if($history->head_dizziness == 1) SI @else NO @endif)</li>
                                    <li>Dolor: (@if($history->headache == 1) SI @else NO @endif)</li>           
                                  </ul>
                                </li>
                                <li>
                                  <b>Boca</b>
                                  <ul>
                                    <li>Halitosis: (@if($history->halitosis == 1) SI @else NO @endif)</li>
                                    <li>Caries: (@if($history->cavities == 1) SI @else NO @endif)</li>
                                    <li>Edentula: (@if($history->edentula == 1) SI @else NO @endif)</li>
                                  </ul>
                                </li>
                                <li>
                                  <b>Pulso: ({{ $history->pulse }})</b>
                                </li>
                                <li>
                                  <b>Respiratorio</b>
                                  <ul>
                                    <li>Dificultad para Respirar: (@if($history->difficulty_breathing == 1) SI @else NO @endif)</li>
                                    <li>Dolor: (@if($history->breathing_pain == 1) SI @else NO @endif)</li>
                                    <li>Tos: (@if($history->cough == 1) SI @else NO @endif)</li>
                                    <li>Expectoración: (@if($history->expectoration == 1) SI @else NO @endif)</li>
                                  </ul>
                                </li>
                                <li>
                                  <b>Ano</b>
                                  <ul>
                                    <li>Fisura: (@if($history->fissure_anus == 1) SI @else NO @endif)</li>
                                  </ul>
                                </li>
                                <li>
                                  <b>Neurologico</b>
                                  <ul>
                                    <li>Dolor: (@if($history->neurological_pain == 1) SI @else NO @endif)</li>
                                    <li>Mareos: (@if($history->neurological_dizziness == 1) SI @else NO @endif)</li>
                                    <li>Desorientado: (@if($history->disorientated == 1) SI @else NO @endif)</li>
                                  </ul>
                                </li>
                              </ul>
                            </div>
                            
                            <div class="col-md-4">
                              <ul>
                                <li>
                                  <b>Ojos</b>
                                  <ul>
                                    <li>Vision Borrosa: (@if($history->blurry_vision == 1) SI @else NO @endif)</li>
                                    <li>Vision Doble: (@if($history->double_vision == 1) SI @else NO @endif)</li>
                                    <li>Lagrimeo: (@if($history->tearing == 1) SI @else NO @endif)</li>
                                  </ul>
                                </li>
                                <li>
                                  <b>Cuello</b>
                                  <ul>
                                    <li>Dolor: (@if($history->neck_pain == 1) SI @else NO @endif)</li>
                                  </ul>
                                </li>
                                <li>
                                  <b>Torax</b>
                                  <ul>
                                    <li>Dolor: (@if($history->torax_pain == 1) SI @else NO @endif)</li>
                                    <li>Angustias: (@if($history->torax_angst == 1) SI @else NO @endif)</li>
                                  </ul>
                                </li>
                                <li>
                                  <b>Abdomen</b>
                                  <ul>
                                    <li>Dolor: (@if($history->abdomen_pain == 1) SI @else NO @endif)</li>
                                    <li>Diarrea: (@if($history->diarrhea == 1) SI @else NO @endif)</li>
                                    <li>Hernias: (@if($history->hernias == 1) SI @else NO @endif)</li>
                                  </ul>
                                </li>
                                <li>
                                  <b>Genitourinario</b>
                                  <ul>
                                    <li>Micciones: (@if($history->genital_micturition == 1) SI @else NO @endif)</li>
                                    <li>Anatomia: (@if($history->genital_anatomy == 1) SI @else NO @endif)</li>
                                    <li>Secreción: (@if($history->genital_secretion == 1) SI @else NO @endif)</li>
                                    <li>Ardor: (@if($history->genital_burning == 1) SI @else NO @endif)</li>
                                    <li>Dolor: (@if($history->genital_pain == 1) SI @else NO @endif)</li>
                                  </ul>
                                </li>
                              </ul>
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
                    <div class="col-md-12">
                        <div class="panel panel-success">
                          <div class="panel-heading">
                            <p class="panel-title" align="center">Examen Fisico</p>
                          </div>
                          <div class="panel-body">
                            <div class="col-md-3">
                              <div class="panel panel-success">
                                <div class="panel-heading">
                                  <p class="panel-title" align="center">Signos Vitales</p>
                                </div>                      
                                  <p align="center">{{ $history->vital_signs }}</p>
                              </div>
                            </div>
                            <div class="col-md-3">
                              <div class="panel panel-success">
                                <div class="panel-heading">
                                  <p class="panel-title" align="center">Peso</p>
                                </div>                      
                                  <p align="center">{{ $history->weight }} Kgrs</p>
                              </div>
                            </div>
                            <div class="col-md-3">
                              <div class="panel panel-success">
                                <div class="panel-heading">
                                  <p class="panel-title" align="center">Talla</p>
                                </div>                      
                                  <p align="center">{{ $history->size }}</p>
                              </div>
                            </div>
                            <div class="col-md-3">
                              <div class="panel panel-success">
                                <div class="panel-heading">
                                  <p class="panel-title" align="center">IMC</p>
                                </div>                      
                                  <p align="center">{{ $history->imc }}</p>
                              </div>
                            </div>
                            <div class="col-md-3">
                              <div class="panel panel-success">
                                <div class="panel-heading">
                                  <p class="panel-title" align="center">F.C</p>
                                </div>                      
                                  <p align="center">{{ $history->fc }}</p>
                              </div>
                            </div>
                            <div class="col-md-3">
                              <div class="panel panel-success">
                                <div class="panel-heading">
                                  <p class="panel-title" align="center">F.R</p>
                                </div>                      
                                  <p align="center">{{ $history->fr }}</p>
                              </div>
                            </div>
                            <div class="col-md-3">
                              <div class="panel panel-success">
                                <div class="panel-heading">
                                  <p class="panel-title" align="center">T/A</p>
                                </div>                      
                                  <p align="center">{{ $history->ta }}</p>
                              </div>
                            </div>
                            <div class="col-md-3">
                              <div class="panel panel-success">
                                <div class="panel-heading">
                                  <p class="panel-title" align="center">C.A</p>
                                </div>                      
                                  <p align="center">{{ $history->ca }}</p>
                              </div>
                            </div>
                            <div class="col-md-4">
                              <div class="panel panel-success">
                                <div class="panel-heading">
                                  <p class="panel-title" align="center">Pulso Fisico</p>
                                </div>                      
                                  <p align="center">{{ $history->pulse_fisic }}</p>
                              </div>
                            </div>
                            <div class="col-md-4">
                              <div class="panel panel-success">
                                <div class="panel-heading">
                                  <p class="panel-title" align="center">Piel</p>
                                </div>                      
                                  <p align="center">{{ $history->skin }}</p>
                              </div>
                            </div>
                            <div class="col-md-4">
                              <div class="panel panel-success">
                                <div class="panel-heading">
                                  <p class="panel-title" align="center">Cabeza</p>
                                </div>                      
                                  <p align="center">{{ $history->head }}</p>
                              </div>
                            </div>
                            <div class="col-md-12">
                              <div class="panel-body">
                                <div class="col-md-4">
                                  <ul>
                                    <li>
                                      <b>Nariz</b>
                                      <ul>
                                        <li>Fozas Nazales: (@if($history->nostrils == 1) SI @else NO @endif)</li>
                                      </ul> 
                                    </li>
                                    <li>
                                      <b>Torax</b>
                                      <ul>
                                        <li>Simetrico: (@if($history->symmetric_thorax == 1) SI @else NO @endif)</li>
                                        <li>Asimetrico: (@if($history->asymmetric_thorax == 1) SI @else NO @endif)</li>
                                      </ul>
                                    </li>
                                    <li>
                                      <b>Abdomen</b>
                                      <ul>
                                        <li>Globoso: (@if($history->globose == 1) SI @else NO @endif)</li>
                                        <li>Plano: (@if($history->flat == 1) SI @else NO @endif)</li>
                                        <li>Rshas: (@if($history->rshas == 1) SI @else NO @endif)</li>
                                        <li>Blando: (@if($history->soft == 1) SI @else NO @endif)</li>
                                        <li>Doloroso: (@if($history->painful == 1) SI @else NO @endif)</li>
                                      </ul>
                                    </li>
                                    <li>
                                      <b>Extremidades</b>
                                      <ul>
                                        <li>Asimetricas: (@if($history->asymmetric_tips == 1) SI @else NO @endif)</li>
                                        <li>Simetricas: (@if($history->symmetrical_tips == 1) SI @else NO @endif)</li>
                                        <li>Eutroficas: (@if($history->eutrophic == 1) SI @else NO @endif)</li>
                                        <li>Atroficas: (@if($history->atrophied == 1) SI @else NO @endif)</li>
                                        <li>Varices: (@if($history->varicose_veins == 1) SI @else NO @endif)</li>
                                        <li>Edema: (@if($history->edema == 1) SI @else NO @endif)</li>
                                      </ul>
                                    </li>
                                  </ul>                              
                                </div>

                                <div class="col-md-4">
                                  <ul>
                                    <li>
                                      <b>Boca</b>
                                      <ul>
                                        <li>Simetrica: (@if($history->symmetrical_mouth == 1) SI @else NO @endif)</li>
                                        <li>Asimetrica: (@if($history->mouth_asymmetry == 1) SI @else NO @endif)</li>           
                                      </ul>
                                    </li>
                                    <li>
                                      <b>Corazon</b>
                                      <ul>
                                        <li>RS CS: (@if($history->rs == 1) SI @else NO @endif)</li>
                                        <li>Soplo: (@if($history->soplo == 1) SI @else NO @endif)</li>
                                        <li>Ritmo: (@if($history->ritmo == 1) SI @else NO @endif)</li>
                                      </ul>
                                    </li>
                                    <li>
                                      <b>Genitales</b>
                                      <ul>
                                        <li>Masculinos: (@if($history->male_genitals == 1) SI @else NO @endif)</li>
                                        <li>Femeninos: (@if($history->female_genitals == 1) SI @else NO @endif)</li>
                                      </ul>
                                    </li>
                                    <li>
                                      <b>Neurologico</b>
                                      <ul>
                                        <li>Vigil: (@if($history->vigil == 1) SI @else NO @endif)</li>
                                        <li>Orientado: (@if($history->oriented == 1) SI @else NO @endif)</li>
                                        <li>Fuerza Muscular: (@if($history->muscular_strength == 1) SI @else NO @endif)</li>
                                        <li>Lenguaje: (@if($history->language == 1) SI @else NO @endif)</li>
                                        <li>Reflejos: (@if($history->reflexes == 1) SI @else NO @endif)</li>
                                      </ul>
                                    </li>
                                  </ul>
                                </div>
                                
                                <div class="col-md-4">
                                  <ul>
                                    <li>
                                      <b>Senos</b>
                                      <ul>
                                        <li>Simetricos: (@if($history->symmetrical_sinuses == 1) SI @else NO @endif)</li>
                                      </ul>
                                    </li>
                                    <li>
                                      <b>Respiratorio</b>
                                      <ul>
                                        <li>RS RS: (@if($history->rs == 1) SI @else NO @endif)</li>
                                        <li>MV: (@if($history->mv == 1) SI @else NO @endif)</li>
                                      </ul>
                                    </li>
                                    <li>
                                      <b>Ano</b>
                                      <ul>
                                        <li>Conducto Anal: (@if($history->anal_canal == 1) SI @else NO @endif)</li>
                                      </ul>
                                    </li>                                      
                                  </ul>
                                </div>
                              </div>
                            </div>
                            <div class="col-md-12">
                              <div class="panel panel-default">
                                <div class="panel-heading">
                                  <p class="panel-title">Diagnosticos</p>
                                </div>                      
                                  <p align="center">{{ $history->diagnoses }}</p>
                              </div>
                            </div>
                            <div class="col-md-12">
                              <div class="panel panel-default">
                                <div class="panel-heading">
                                  <p class="panel-title">Plan</p>
                                </div>                      
                                  <p align="center">{{ $history->plan }}</p>
                              </div>
                            </div>
                            <div class="col-md-12">
                              <div class="panel panel-default">
                                <div class="panel-heading">
                                  <p class="panel-title">Observaciones</p>
                                </div>                      
                                  <p align="center">{{ $history->observations }}</p>
                              </div>
                            </div>
                            </div>                      
                            </div>
                          </div>
                        </div>                      
                      </div>                    
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