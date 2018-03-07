<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHistoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('histories', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('people_id')->unsigned();//titular id
            $table->string('medical');
            
            $table->string('motive');//motivo de la consulta
            $table->text('current_illness');//enfermedad actual
            $table->text('personal_history');//antecendetes personales
            $table->string('mon_history');//antecendetes madre
            $table->string('dad_history');//antecendetes padre
            $table->string('sons_history');//antecendetes hijos
            $table->string('brot_history');//antecendetes hermanos
            $table->text('gynecology');//antecendetes ginecologicos
            //habitos psicobiologicos
            $table->enum('alcohol', ['1', '0'])->default('0');//habitos alcohol 
            $table->enum('cigarettes', ['1', '0'])->default('0');//habitos cigarros
            $table->enum('cofe', ['1', '0'])->default('0');//habitos cafe
            $table->enum('tobacco', ['1', '0'])->default('0');//habitos tabaco

            //examen funcional
            $table->enum('fever', ['1', '0'])->default('0');//examen funcional  general fiebre 
            $table->enum('head_dizziness', ['1', '0'])->default('0');//examen funcional cabeza mareos
            $table->enum('headache', ['1', '0'])->default('0');//examen funcional dolor cabeza
            $table->enum('blurry_vision', ['1', '0'])->default('0');//examen funcional ojos: vision borrosa
            $table->enum('double_vision', ['1', '0'])->default('0');//examen funcional ojos vision doble 
            $table->enum('tearing', ['1', '0'])->default('0');//examen funcional ojos: lagrimeo
            $table->enum('bleeding_nose', ['1', '0'])->default('0');//examen funcional sangrado de nariz
            $table->enum('nose_secretion', ['1', '0'])->default('0');//examen funcional secrecion en la nariz
            $table->enum('halitosis', ['1', '0'])->default('0');//examen funcional boca: halitosis 
            $table->enum('cavities', ['1', '0'])->default('0');//examen funcional boca: caries
            $table->enum('edentula', ['1', '0'])->default('0');//examen funcional boca: edentula
            $table->enum('neck_pain', ['1', '0'])->default('0');//examen funcional dolor cuello
            $table->enum('breast_masses', ['1', '0'])->default('0');//examen funcional masas en senos 
            $table->enum('breast_pain', ['1', '0'])->default('0');//examen funcional dolor en senos
            $table->enum('breast_secretion', ['1', '0'])->default('0');//examen funcional secrecion en senos
            $table->string('pulse');//examen funcional pulso
            $table->enum('torax_pain', ['1', '0'])->default('0');//examen funcional  dolor de torax 
            $table->enum('torax_angst', ['1', '0'])->default('0');//examen funcional angustias en torax
            $table->enum('dyspnoa', ['1', '0'])->default('0');//examen funcional disnea
            $table->enum('heart_pain', ['1', '0'])->default('0');//examen funcional dolor en el corazon
            $table->enum('tachycardias', ['1', '0'])->default('0');//examen funcional taquicardia
            $table->enum('oppression', ['1', '0'])->default('0');//examen funcional opresion en el corazon
            $table->enum('difficulty_breathing', ['1', '0'])->default('0');//examen funcional dificultad al respirar
            $table->enum('breathing_pain', ['1', '0'])->default('0');//examen funcional dolor al respirar
            $table->enum('cough', ['1', '0'])->default('0');//examen funcional tos 
            $table->enum('expectoration', ['1', '0'])->default('0');//examen funcional expectoracion al respirar

            $table->enum('abdomen_pain', ['1', '0'])->default('0');//examen funcional  general fiebre 
            $table->enum('diarrhea', ['1', '0'])->default('0');//examen funcional cabeza mareos
            $table->enum('hernias', ['1', '0'])->default('0');//examen funcional dolor cabeza
            $table->enum('genitals_man', ['1', '0'])->default('0');//examen funcional ojos: vision borrosa
            $table->enum('genitals_woman', ['1', '0'])->default('0');//examen funcional ojos vision doble 
            $table->enum('genital_micturition', ['1', '0'])->default('0');//examen funcional ojos: lagrimeo
            $table->enum('genital_anatomy', ['1', '0'])->default('0');//examen funcional sangrado de nariz
            $table->enum('genital_secretion', ['1', '0'])->default('0');//examen funcional secrecion en la nariz
            $table->enum('genital_burning', ['1', '0'])->default('0');//examen funcional boca: halitosis 
            $table->enum('genital_pain', ['1', '0'])->default('0');//examen funcional boca: caries
            $table->enum('fissure_anus', ['1', '0'])->default('0');//examen funcional boca: edentula
            //$table->enum('neck_pain', ['1', '0'])->default('0');//examen funcional dolor cuello
            $table->enum('pain_limbs', ['1', '0'])->default('0');//examen funcional masas en senos 
            $table->enum('extremity_fatigue', ['1', '0'])->default('0');//examen funcional dolor en senos
            $table->enum('heaviness_tips', ['1', '0'])->default('0');//examen funcional secrecion en senos  
            $table->enum('swelling_extremities', ['1', '0'])->default('0');//examen funcional dolor cuello
            $table->enum('neurological_pain', ['1', '0'])->default('0');//examen funcional masas en senos 
            $table->enum('neurological_dizziness', ['1', '0'])->default('0');//examen funcional dolor en senos
            $table->enum('disorientated', ['1', '0'])->default('0');//examen funcional secrecion en senos    

            //EXAMEN FISICO
            $table->string('vital_signs');
            $table->string('weight');
            $table->string('size');
            $table->string('imc');
            $table->string('fc');
            $table->string('fr');
            $table->string('ta');
            $table->string('ca');
            $table->string('pulse_fisic');
            $table->string('skin');
            $table->string('head');

            $table->enum('symmetrical_mouth', ['1', '0'])->default('0');//examen funcional dolor en senos
            $table->enum('rshas', ['1', '0'])->default('0');
            $table->enum('nostrils', ['1', '0'])->default('0');
            $table->enum('mouth_asymmetry', ['1', '0'])->default('0');
            $table->enum('symmetrical_neck', ['1', '0'])->default('0');
            $table->enum('asymmetrical_neck', ['1', '0'])->default('0');
            $table->enum('symmetrical_sinuses', ['1', '0'])->default('0');
            $table->string('pulses');//OJO ELIMINAR
            $table->enum('asymmetric_thorax', ['1', '0'])->default('0');
            $table->enum('symmetric_thorax', ['1', '0'])->default('0');
            $table->enum('rs_cs', ['1', '0'])->default('0');
            $table->enum('soplo', ['1', '0'])->default('0');
            $table->enum('ritmo', ['1', '0'])->default('0');
            $table->enum('rs', ['1', '0'])->default('0');
            $table->enum('mv', ['1', '0'])->default('0');
            $table->enum('globose', ['1', '0'])->default('0');
            $table->enum('flat', ['1', '0'])->default('0');
            $table->enum('soft', ['1', '0'])->default('0');
            $table->enum('painful', ['1', '0'])->default('0');
            $table->enum('male_genitals', ['1', '0'])->default('0');
            $table->enum('female_genitals', ['1', '0'])->default('0');
            $table->enum('anal_canal', ['1', '0'])->default('0');
            $table->enum('asymmetric_tips', ['1', '0'])->default('0');
            $table->enum('symmetrical tips', ['1', '0'])->default('0');
            $table->enum('eutrophic', ['1', '0'])->default('0');
            $table->enum('atrophied', ['1', '0'])->default('0');
            $table->enum('varicose_veins', ['1', '0'])->default('0');
            $table->enum('edema', ['1', '0'])->default('0');
            $table->enum('vigil', ['1', '0'])->default('0');
            $table->enum('oriented', ['1', '0'])->default('0');
            $table->enum('muscular_strength', ['1', '0'])->default('0');
            $table->enum('language', ['1', '0'])->default('0');
            $table->enum('reflexes', ['1', '0'])->default('0');
            $table->text('diagnoses');
            $table->text('plan');
            $table->text('observations');


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('histories');
    }
}
