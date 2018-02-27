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
            $table->string('codigo');
            $table->string('motive');//motivo de la consulta
            $table->text('current_illness');//enfermedad actual
            $table->text('personal_history');//antecendetes personales
            $table->string('mon_history');//antecendetes madre
            $table->string('dad_history');//antecendetes padre
            $table->string('sons_history');//antecendetes hijos
            $table->string('brot_history');//antecendetes hermanos
            $table->text('gynecology');//antecendetes ginecologicos
            //habitos psicobiologicos
            $table->enum('alcohol', ['SI', 'NO'])->default('NO');//habitos alcohol 
            $table->enum('cigarettes', ['SI', 'NO'])->default('NO');//habitos cigarros
            $table->enum('cofe', ['SI', 'NO'])->default('NO');//habitos cafe
            $table->enum('tobacco', ['SI', 'NO'])->default('NO');//habitos tabaco

            //examen funcional
            $table->enum('fever', ['SI', 'NO'])->default('NO');//examen funcional  general fiebre 
            $table->enum('head_dizziness', ['SI', 'NO'])->default('NO');//examen funcional cabeza mareos
            $table->enum('headache', ['SI', 'NO'])->default('NO');//examen funcional dolor cabeza
            $table->enum('blurry_vision', ['SI', 'NO'])->default('NO');//examen funcional ojos: vision borrosa
            $table->enum('double_vision', ['SI', 'NO'])->default('NO');//examen funcional ojos vision doble 
            $table->enum('tearing', ['SI', 'NO'])->default('NO');//examen funcional ojos: lagrimeo
            $table->enum('bleeding_nose', ['SI', 'NO'])->default('NO');//examen funcional sangrado de nariz
            $table->enum('nose_secretion', ['SI', 'NO'])->default('NO');//examen funcional secrecion en la nariz
            $table->enum('halitosis', ['SI', 'NO'])->default('NO');//examen funcional boca: halitosis 
            $table->enum('cavities', ['SI', 'NO'])->default('NO');//examen funcional boca: caries
            $table->enum('edentula', ['SI', 'NO'])->default('NO');//examen funcional boca: edentula
            $table->enum('neck_pain', ['SI', 'NO'])->default('NO');//examen funcional dolor cuello
            $table->enum('breast_masses', ['SI', 'NO'])->default('NO');//examen funcional masas en senos 
            $table->enum('breast_pain', ['SI', 'NO'])->default('NO');//examen funcional dolor en senos
            $table->enum('breast_secretion', ['SI', 'NO'])->default('NO');//examen funcional secrecion en senos
            $table->string('pulse');//examen funcional pulso
            $table->enum('torax_pain', ['SI', 'NO'])->default('NO');//examen funcional  dolor de torax 
            $table->enum('torax_angst', ['SI', 'NO'])->default('NO');//examen funcional angustias en torax
            $table->enum('dyspnoa', ['SI', 'NO'])->default('NO');//examen funcional disnea
            $table->enum('heart_pain', ['SI', 'NO'])->default('NO');//examen funcional dolor en el corazon
            $table->enum('tachycardias', ['SI', 'NO'])->default('NO');//examen funcional taquicardia
            $table->enum('oppression', ['SI', 'NO'])->default('NO');//examen funcional opresion en el corazon
            $table->enum('difficulty_breathing', ['SI', 'NO'])->default('NO');//examen funcional dificultad al respirar
            $table->enum('breathing_pain', ['SI', 'NO'])->default('NO');//examen funcional dolor al respirar
            $table->enum('cough', ['SI', 'NO'])->default('NO');//examen funcional tos 
            $table->enum('expectoration', ['SI', 'NO'])->default('NO');//examen funcional expectoracion al respirar

            $table->enum('abdomen pain', ['SI', 'NO'])->default('NO');//examen funcional  general fiebre 
            $table->enum('diarrhea', ['SI', 'NO'])->default('NO');//examen funcional cabeza mareos
            $table->enum('hernias', ['SI', 'NO'])->default('NO');//examen funcional dolor cabeza
            $table->enum('genitals_man', ['SI', 'NO'])->default('NO');//examen funcional ojos: vision borrosa
            $table->enum('genitals_woman', ['SI', 'NO'])->default('NO');//examen funcional ojos vision doble 
            $table->enum('genital_micturition', ['SI', 'NO'])->default('NO');//examen funcional ojos: lagrimeo
            $table->enum('genital_anatomy', ['SI', 'NO'])->default('NO');//examen funcional sangrado de nariz
            $table->enum('genital_secretion', ['SI', 'NO'])->default('NO');//examen funcional secrecion en la nariz
            $table->enum('genital_burning', ['SI', 'NO'])->default('NO');//examen funcional boca: halitosis 
            $table->enum('genital_pain', ['SI', 'NO'])->default('NO');//examen funcional boca: caries
            $table->enum('fissure_anus', ['SI', 'NO'])->default('NO');//examen funcional boca: edentula
            //$table->enum('neck_pain', ['SI', 'NO'])->default('NO');//examen funcional dolor cuello
            $table->enum('pain_limbs', ['SI', 'NO'])->default('NO');//examen funcional masas en senos 
            $table->enum('extremity_fatigue', ['SI', 'NO'])->default('NO');//examen funcional dolor en senos
            $table->enum('heaviness_tips', ['SI', 'NO'])->default('NO');//examen funcional secrecion en senos  
            $table->enum('swelling_extremities', ['SI', 'NO'])->default('NO');//examen funcional dolor cuello
            $table->enum('neurological_pain', ['SI', 'NO'])->default('NO');//examen funcional masas en senos 
            $table->enum('neurological_dizziness', ['SI', 'NO'])->default('NO');//examen funcional dolor en senos
            $table->enum('disorientated', ['SI', 'NO'])->default('NO');//examen funcional secrecion en senos    

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

            $table->enum('symmetry eyes', ['SI', 'NO'])->default('NO');//examen funcional dolor en senos
            $table->enum('asymmetry eyes', ['SI', 'NO'])->default('NO');
            $table->enum('nostrils', ['SI', 'NO'])->default('NO');
            $table->enum('mouth asymmetry', ['SI', 'NO'])->default('NO');
            $table->enum('symmetrical neck', ['SI', 'NO'])->default('NO');
            $table->enum('asymmetrical neck', ['SI', 'NO'])->default('NO');
            $table->enum('symmetrical sinuses', ['SI', 'NO'])->default('NO');
            $table->string('pulses');
            $table->enum('asymmetric thorax', ['SI', 'NO'])->default('NO');
            $table->enum('symmetric_thorax', ['SI', 'NO'])->default('NO');
            $table->enum('rs_cs', ['SI', 'NO'])->default('NO');
            $table->enum('soplo', ['SI', 'NO'])->default('NO');
            $table->enum('ritmo', ['SI', 'NO'])->default('NO');
            $table->enum('globose', ['SI', 'NO'])->default('NO');
            $table->enum('flat', ['SI', 'NO'])->default('NO');
            $table->enum('soft', ['SI', 'NO'])->default('NO');
            $table->enum('painful', ['SI', 'NO'])->default('NO');
            $table->enum('anal_canal', ['SI', 'NO'])->default('NO');
            $table->enum('asymmetric_tips', ['SI', 'NO'])->default('NO');
            $table->enum('eutrophic', ['SI', 'NO'])->default('NO');
            $table->enum('atrophied', ['SI', 'NO'])->default('NO');
            $table->enum('varicose_veins', ['SI', 'NO'])->default('NO');
            $table->enum('edema', ['SI', 'NO'])->default('NO');
            $table->enum('vigil', ['SI', 'NO'])->default('NO');
            $table->enum('oriented', ['SI', 'NO'])->default('NO');
            $table->enum('muscular_strength', ['SI', 'NO'])->default('NO');
            $table->enum('language', ['SI', 'NO'])->default('NO');
            $table->enum('reflexes', ['SI', 'NO'])->default('NO');
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
