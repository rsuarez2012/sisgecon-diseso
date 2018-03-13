<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOccupationalHistoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('occupational_histories', function (Blueprint $table) {
            $table->increments('id');
            //titular
            $table->integer('people_id')->unsigned();
            //trabajos anteriores
            $table->string('company');//empresa
            $table->string('company1')->nullable();
            $table->string('company2')->nullable();
            $table->string('activity');//actividad
            $table->string('activity1')->nullable();
            $table->string('activity2')->nullable();
            $table->string('since');//desde
            $table->string('since1')->nullable();
            $table->string('since2')->nullable();
            $table->string('until');//hasta
            $table->string('until1')->nullable();
            $table->string('until2')->nullable();
            $table->string('risks');//riesgos
            $table->string('risks1')->nullable();
            $table->string('risks2')->nullable();
            //antecedentes ocupacionales
                //fisicos
            $table->enum('noise', ['1', '0'])->default('0');//ruido
            $table->enum('noise_acute', ['1', '0'])->default('0');
            $table->enum('noise_chronicle', ['1', '0'])->default('0');
            $table->string('noise_moses')->nullable();
            $table->string('noise_year')->nullable();

            $table->enum('hot', ['1', '0'])->default('0');//calor
            $table->string('hot_temperature')->nullable();
            $table->enum('hot_acute', ['1', '0'])->default('0');
            $table->enum('hot_chronicle', ['1', '0'])->default('0');
            $table->string('hot_moses')->nullable();
            $table->string('hot_year')->nullable();

            $table->enum('cool', ['1', '0'])->default('0');//frio
            $table->string('cool_temperature')->nullable();
            $table->enum('cool_acute', ['1', '0'])->default('0');
            $table->enum('cool_chronicle', ['1', '0'])->default('0');
            $table->string('cool_moses')->nullable();
            $table->string('cool_year')->nullable();

            $table->enum('vibrations', ['1', '0'])->default('0');//vibraciones
            $table->enum('vibrations_body', ['1', '0'])->default('0');
            $table->enum('vibrations_segmental', ['1', '0'])->default('0');
            $table->enum('vibrations_acute', ['1', '0'])->default('0');
            $table->enum('vibrations_chronicle', ['1', '0'])->default('0');
            $table->string('vibrations_moses')->nullable();
            $table->string('vibrations_year')->nullable();

            $table->enum('ionizing_radiation', ['1', '0'])->default('0');//radiaciones ionizantes
            $table->string('ionizing_type')->nullable();
            $table->string('ionizing_moses')->nullable();
            $table->string('ionizing_year')->nullable();

            $table->enum('no_ionizing_radiation', ['1', '0'])->default('0');//radiaciones  no ionizantes
            $table->string('no_ionizing_type')->nullable();
            $table->string('no_ionizing_moses')->nullable();
            $table->string('no_ionizing_year')->nullable();

                //quimicos
            $table->enum('fumes', ['1', '0'])->default('0');//humos
            $table->string('fumes_type')->nullable();
            $table->enum('fumes_acute', ['1', '0'])->default('0');
            $table->enum('fumes_chronicle', ['1', '0'])->default('0');
            $table->string('fumes_moses')->nullable();
            $table->string('fumes_year')->nullable();

            $table->enum('dust', ['1', '0'])->default('0');//polvos y fibras
            $table->string('dust_type')->nullable();
            $table->enum('dust_acute', ['1', '0'])->default('0');
            $table->enum('dust_chronicle', ['1', '0'])->default('0');
            $table->string('dust_moses')->nullable();
            $table->string('dust_year')->nullable();

            $table->enum('metals', ['1', '0'])->default('0');//metales pesados
            $table->string('metals_type')->nullable();
            $table->enum('metals_acute', ['1', '0'])->default('0');
            $table->enum('metals_chronicle', ['1', '0'])->default('0');
            $table->string('metals_moses')->nullable();
            $table->string('metals_year')->nullable();

            $table->enum('vapors', ['1', '0'])->default('0');//gases y vapores
            $table->string('vapors_type')->nullable();
            $table->enum('vapors_acute', ['1', '0'])->default('0');
            $table->enum('vapors_chronicle', ['1', '0'])->default('0');
            $table->string('vapors_moses')->nullable();
            $table->string('vapors_year')->nullable();

            $table->enum('solvents', ['1', '0'])->default('0');//solventes
            $table->string('solvents_type')->nullable();
            $table->enum('solvents_acute', ['1', '0'])->default('0');
            $table->enum('solvents_chronicle', ['1', '0'])->default('0');
            $table->string('solvents_moses')->nullable();
            $table->string('solvents_year')->nullable();

                //disergonomico
            $table->enum('sitting', ['1', '0'])->default('0');//posiciones
            $table->enum('prolonged', ['1', '0'])->default('0');
            $table->string('characteristic_chair')->nullable();
            $table->string('positions_hours')->nullable();
            $table->string('positions_moses')->nullable();
            $table->string('positions_year')->nullable();

            $table->enum('standing', ['1', '0'])->default('0');//bipedestacion prolongada
            $table->string('standing_hours')->nullable();
            $table->string('standing_moses')->nullable();
            $table->string('standing_year')->nullable();

            $table->enum('knees', ['1', '0'])->default('0');//de rodilas
            $table->string('knees_hours')->nullable();
            $table->string('knees_moses')->nullable();
            $table->string('knees_year')->nullable();

            $table->enum('cunnels', ['1', '0'])->default('0');//en cunclillas
            $table->string('cunnels_hours')->nullable();
            $table->string('cunnels_moses')->nullable();
            $table->string('cunnels_year')->nullable();

            $table->string('load')->nullable();//manipulacion de carga en kg
            $table->string('load_type')->nullable();
            $table->string('load_frecuncy')->nullable();
            $table->string('load_hours')->nullable();
            $table->string('load_moses')->nullable();
            $table->string('load_year')->nullable();

            $table->enum('transfer', ['1', '0'])->default('0');//traslado de carga
            $table->string('transfer_type')->nullable();
            $table->string('transfer_weight')->nullable();
            $table->string('transfer_distance')->nullable();
            $table->string('transfer_frecuncy')->nullable();
            $table->string('transfer_hours')->nullable();
            $table->string('transfer_moses')->nullable();
            $table->string('transfer_year')->nullable();

            $table->string('push')->nullable();//halar o empujar
            $table->string('push_type')->nullable();
            $table->string('push_weight')->nullable();
            $table->string('push_distance')->nullable();
            $table->string('push_frecuncy')->nullable();
            $table->string('push_hours')->nullable();
            $table->string('push_moses')->nullable();
            $table->string('push_year')->nullable();

            $table->enum('moves', ['1', '0'])->default('0');//halar o empujar
            $table->string('moves_body')->nullable();
            $table->string('moves_frecuncy')->nullable();
            $table->string('moves_hours')->nullable();
            $table->string('moves_moses')->nullable();
            $table->string('moves_year')->nullable();

                //biologicos
            $table->enum('organic', ['1', '0'])->default('0');//organicos
            //$table->enum('inorganic', ['1', '0'])->default('0');
            $table->enum('animals', ['1', '0'])->default('0');
            $table->enum('waste', ['1', '0'])->default('0');
            $table->string('biologic_hours')->nullable();
            $table->string('biologic_moses')->nullable();
            $table->string('biologic_year')->nullable();
            $table->enum('inorganic', ['1', '0'])->default('0');

                //mecanicos
            $table->enum('work', ['1', '0'])->default('0');//mecanicos
            //$table->enum('guard', ['1' '0'])->default('0');
            $table->enum('guard', ['1', '0'])->default('0');
            $table->enum('others', ['1', '0'])->default('0');
            //$table->string('work_biologic_hours')->nullable();
            $table->string('work_biologic_hours')->nullable();
            $table->string('work_biologic_moses')->nullable();
            $table->string('work_biologic_year')->nullable();

                //otros            
            $table->string('other_type')->nullable();//otros
            $table->string('other_description')->nullable();
            $table->string('other_time')->nullable();

                //preguntas adicional
            $table->enum('accident', ['1', '0'])->default('0');//ha sufrido accidents
            $table->string('body_part')->nullable();
            $table->date('accident_date')->nullable();
            $table->string('aftermath')->nullable();

            $table->enum('occupational_disease', ['1', '0'])->default('0');//tiene enfermedad ocupacional
            $table->enum('inpsasel', ['1', '0'])->default('0');//certificado inpsasel
            $table->enum('change_work', ['1', '0'])->default('0');//cambio de trabajo



            
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
        Schema::dropIfExists('occupational_histories');
    }
}
