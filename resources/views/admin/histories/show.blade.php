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
                                    <li>Fiebre: ({{ $history->fever }})</li>
                                  </ul> 
                                </li>
                                <li>
                                  <b>Nariz</b>
                                  <ul>
                                    <li>Sangrado: ({{ $history->bleeding_nose }})</li>
                                    <li>Secreción: ({{ $history->nose_secretion }})</li>
                                  </ul>
                                </li>
                                <li>
                                  <b>Senos</b>
                                  <ul>
                                    <li>Masas: ({{ $history->breast_masses }})</li>
                                    <li>Dolor: ({{ $history->breast_pain }})</li>
                                    <li>Secreción: ({{ $history->breast_secretion }})</li>
                                  </ul>
                                </li>
                                <li>
                                  <b>Corazon</b>
                                  <ul>
                                    <li>Disnea: ({{ $history->dyspnoa }})</li>
                                    <li>Dolor: ({{ $history->heart_pain }})</li>
                                    <li>Taquicardia: ({{ $history->tachycardias }})</li>
                                    <li>Opresión: ({{ $history->oppression }})</li>
                                  </ul>
                                </li>
                                <li>
                                  <b>Genitales</b>
                                  <ul>
                                    <li>Hombre: ({{ $history->genitals_man }})</li>
                                    <li>Mujer: ({{ $history->genitals_woman }})</li>
                                  </ul>
                                </li>
                                <li>
                                  <b>Extremidades</b>
                                  <ul>
                                    <li>Dolor: ({{ $history->pain_limbs }})</li>
                                    <li>Cansancio: ({{ $history->extremity_fatigue }})</li>
                                    <li>pesadez: ({{ $history->heaviness_tips }})</li>
                                    <li>Hinchazón: ({{ $history->swelling_extremities }})</li>
                                  </ul>
                                </li>
                              </ul>                              
                            </div>

                            <div class="col-md-4">
                              <ul>
                                <li>
                                  <b>Cabeza</b>
                                  <ul>
                                    <li>Mareos: ({{ $history->head_dizziness }})</li>
                                    <li>Dolor: ({{ $history->headache }})</li>           
                                  </ul>
                                </li>
                                <li>
                                  <b>Boca</b>
                                  <ul>
                                    <li>Halitosis: ({{ $history->halitosis }})</li>
                                    <li>Caries: ({{ $history->cavities }})</li>
                                    <li>Edentula: ({{ $history->edentula }})</li>
                                  </ul>
                                </li>
                                <li>
                                  <b>Pulso: ({{ $history->pulse }})</b>
                                </li>
                                <li>
                                  <b>Respiratorio</b>
                                  <ul>
                                    <li>Dificultad para Respirar: ({{ $history->difficulty_breathing }})</li>
                                    <li>Dolor: ({{ $history->breathing_pain }})</li>
                                    <li>Tos: ({{ $history->cough }})</li>
                                    <li>Expectoración: ({{ $history->expectoration }})</li>
                                  </ul>
                                </li>
                                <li>
                                  <b>Ano</b>
                                  <ul>
                                    <li>Fisura: ({{ $history->fissure_anus }})</li>
                                  </ul>
                                </li>
                                <li>
                                  <b>Neurologico</b>
                                  <ul>
                                    <li>Dolor: ({{ $history->neurological_pain }})</li>
                                    <li>Mareos: ({{ $history->neurological_dizziness }})</li>
                                    <li>Desorientado: ({{ $history->disorientated }})</li>
                                  </ul>
                                </li>
                              </ul>
                            </div>
                            
                            <div class="col-md-4">
                              <ul>
                                <li>
                                  <b>Ojos</b>
                                  <ul>
                                    <li>Vision Borrosa: ({{ $history->blurry_vision }})</li>
                                    <li>Vision Doble: ({{ $history->double_vision }})</li>
                                    <li>Lagrimeo: ({{ $history->tearing }})</li>
                                  </ul>
                                </li>
                                <li>
                                  <b>Cuello</b>
                                  <ul>
                                    <li>Dolor: ({{ $history->neck_pain }})</li>
                                  </ul>
                                </li>
                                <li>
                                  <b>Torax</b>
                                  <ul>
                                    <li>Dolor: ({{ $history->torax_pain }})</li>
                                    <li>Angustias: ({{ $history->torax_angst }})</li>
                                  </ul>
                                </li>
                                <li>
                                  <b>Abdomen</b>
                                  <ul>
                                    <li>Dolor: ({{ $history->abdomen_pain }})</li>
                                    <li>Diarrea: ({{ $history->diarrhea }})</li>
                                    <li>Hernias: ({{ $history->hernias }})</li>
                                  </ul>
                                </li>
                                <li>
                                  <b>Genitourinario</b>
                                  <ul>
                                    <li>Micciones: ({{ $history->genital_micturition }})</li>
                                    <li>Anatomia: ({{ $history->genital_anatomy }})</li>
                                    <li>Secreción: ({{ $history->genital_secretion }})</li>
                                    <li>Ardor: ({{ $history->genital_burning }})</li>
                                    <li>Dolor: ({{ $history->genital_pain }})</li>
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
                                        <li>Fozas Nazales: ({{ $history->nostrils }})</li>
                                      </ul> 
                                    </li>
                                    <li>
                                      <b>Torax</b>
                                      <ul>
                                        <li>Simetrico: ({{ $history->symmetric_thorax }})</li>
                                        <li>Asimetrico: ({{ $history->asymmetric_thorax }})</li>
                                      </ul>
                                    </li>
                                    <li>
                                      <b>Abdomen</b>
                                      <ul>
                                        <li>Globoso: ({{ $history->globose }})</li>
                                        <li>Plano: ({{ $history->flat }})</li>
                                        <li>Rshas: ({{ $history->rshas }})</li>
                                        <li>Blando: ({{ $history->soft }})</li>
                                        <li>Doloroso: ({{ $history->painful }})</li>
                                      </ul>
                                    </li>
                                    <li>
                                      <b>Extremidades</b>
                                      <ul>
                                        <li>Asimetricas: ({{ $history->asymmetric_tips }})</li>
                                        <li>Simetricas: ({{ $history->symmetrical_tips }})</li>
                                        <li>Eutroficas: ({{ $history->eutrophic }})</li>
                                        <li>Atroficas: ({{ $history->atrophied }})</li>
                                        <li>Varices: ({{ $history->varicose_veins }})</li>
                                        <li>Edema: ({{ $history->edema }})</li>
                                      </ul>
                                    </li>
                                  </ul>                              
                                </div>

                                <div class="col-md-4">
                                  <ul>
                                    <li>
                                      <b>Boca</b>
                                      <ul>
                                        <li>Simetrica: ({{ $history->symmetrical_mouth }})</li>
                                        <li>Asimetrica: ({{ $history->mouth_asymmetry }})</li>           
                                      </ul>
                                    </li>
                                    <li>
                                      <b>Corazon</b>
                                      <ul>
                                        <li>RS CS: ({{ $history->rs }})</li>
                                        <li>Soplo: ({{ $history->soplo }})</li>
                                        <li>Ritmo: ({{ $history->ritmo }})</li>
                                      </ul>
                                    </li>
                                    <li>
                                      <b>Genitales</b>
                                      <ul>
                                        <li>Masculinos: ({{ $history->male_genitals }})</li>
                                        <li>Femeninos: ({{ $history->female_genitals }})</li>
                                      </ul>
                                    </li>
                                    <li>
                                      <b>Neurologico</b>
                                      <ul>
                                        <li>Vigil: ({{ $history->vigil }})</li>
                                        <li>Orientado: ({{ $history->oriented }})</li>
                                        <li>Fuerza Muscular: ({{ $history->muscular_strength }})</li>
                                        <li>Lenguaje: ({{ $history->language }})</li>
                                        <li>Reflejos: ({{ $history->reflexes }})</li>
                                      </ul>
                                    </li>
                                  </ul>
                                </div>
                                
                                <div class="col-md-4">
                                  <ul>
                                    <li>
                                      <b>Senos</b>
                                      <ul>
                                        <li>Simetricos: ({{ $history->symmetrical_sinuses }})</li>
                                      </ul>
                                    </li>
                                    <li>
                                      <b>Respiratorio</b>
                                      <ul>
                                        <li>RS RS: ({{ $history->rs }})</li>
                                        <li>MV: ({{ $history->mv }})</li>
                                      </ul>
                                    </li>
                                    <li>
                                      <b>Ano</b>
                                      <ul>
                                        <li>Conducto Anal: ({{ $history->anal_canal }})</li>
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