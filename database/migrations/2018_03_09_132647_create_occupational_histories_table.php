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
            $table->string('company1');
            $table->string('company2');
            $table->string('activity');//actividad
            $table->string('activity1');
            $table->string('activity2');
            $table->string('since');//desde
            $table->string('since1');
            $table->string('since2');
            $table->string('until');//hasta
            $table->string('until1');
            $table->string('until2');
            $table->string('risks');//riesgos
            $table->string('risks1');
            $table->string('risks2');
            //antecedentes ocupacionales
                //fisicos
            $table->enum('noise', ['1', '0'])->default('0');//ruido
            $table->enum('noise_acute', ['1', '0'])->default('0');
            $table->enum('noise_chronicle', ['1', '0'])->default('0');
            $table->string('noise_moses');
            $table->string('noise_year');

            $table->enum('hot', ['1', '0'])->default('0');//calor
            $table->string('hot_temperature');
            $table->enum('hot_acute', ['1', '0'])->default('0');
            $table->enum('hot_chronicle', ['1', '0'])->default('0');
            $table->string('hot_moses');
            $table->string('hot_year');

            $table->enum('cool', ['1', '0'])->default('0');//frio
            $table->string('cool_temperature');
            $table->enum('cool_acute', ['1', '0'])->default('0');
            $table->enum('cool_chronicle', ['1', '0'])->default('0');
            $table->string('cool_moses');
            $table->string('cool_year');

            $table->enum('vibrations', ['1', '0'])->default('0');//vibraciones
            $table->enum('vibrations_body', ['1', '0'])->default('0');
            $table->enum('vibrations_segmental', ['1', '0'])->default('0');
            $table->enum('vibrations_acute', ['1', '0'])->default('0');
            $table->enum('vibrations_chronicle', ['1', '0'])->default('0');
            $table->string('vibrations_moses');
            $table->string('vibrations_year');

            $table->enum('ionizing_radiation', ['1', '0'])->default('0');//radiaciones ionizantes
            $table->string('ionizing_type');
            $table->string('ionizing_moses');
            $table->string('ionizing_year');

            $table->enum('no_ionizing_radiation', ['1', '0'])->default('0');//radiaciones  no ionizantes
            $table->string('no_ionizing_type');
            $table->string('no_ionizing_moses');
            $table->string('no_ionizing_year');

                //quimicos
            $table->enum('dust', ['1', '0'])->default('0');//polvos y fibras
            $table->string('dust_type');
            $table->enum('dust_acute', ['1', '0'])->default('0');
            $table->enum('dust_chronicle', ['1', '0'])->default('0');
            $table->string('dust_moses');
            $table->string('dust_year');

            $table->enum('metals', ['1', '0'])->default('0');//metales pesados
            $table->string('metals_type');
            $table->enum('metals_acute', ['1', '0'])->default('0');
            $table->enum('metals_chronicle', ['1', '0'])->default('0');
            $table->string('metals_moses');
            $table->string('metals_year');

            $table->enum('vapors', ['1', '0'])->default('0');//gases y vapores
            $table->string('vapors_type');
            $table->enum('vapors_acute', ['1', '0'])->default('0');
            $table->enum('vapors_chronicle', ['1', '0'])->default('0');
            $table->string('vapors_moses');
            $table->string('vapors_year');

            $table->enum('solvents', ['1', '0'])->default('0');//solventes
            $table->string('solvents_type');
            $table->enum('solvents_acute', ['1', '0'])->default('0');
            $table->enum('solvents_chronicle', ['1', '0'])->default('0');
            $table->string('solvents_moses');
            $table->string('solvents_year');

                //disergonomico
            $table->enum('sitting', ['1', '0'])->default('0');//posiciones
            $table->enum('prolonged', ['1', '0'])->default('0');
            $table->string('characteristic_chair');
            $table->string('positions_hours');
            $table->string('positions_moses');
            $table->string('positions_year');

            $table->enum('standing', ['1', '0'])->default('0');//bipedestacion prolongada
            $table->string('standing_hours');
            $table->string('standing_moses');
            $table->string('standing_year');

            $table->enum('knees', ['1', '0'])->default('0');//de rodilas
            $table->string('knees_hours');
            $table->string('knees_moses');
            $table->string('knees_year');

            $table->enum('cunnels', ['1', '0'])->default('0');//en cunclillas
            $table->string('cunnels_hours');
            $table->string('cunnels_moses');
            $table->string('cunnels_year');

            $table->string('load');//manipulacion de carga en kg
            $table->string('load_type');
            $table->string('load_frecuncy');
            $table->string('load_hours');
            $table->string('load_moses');
            $table->string('load_year');

            $table->enum('transfer', ['1', '0'])->default('0');//traslado de carga
            $table->string('transfer_type');
            $table->string('transfer_weight');
            $table->string('transfer_distance');
            $table->string('transfer_frecuncy');
            $table->string('transfer_hours');
            $table->string('transfer_moses');
            $table->string('transfer_year');

            $table->string('push');//halar o empujar
            $table->string('push_type');
            $table->string('push_weight');
            $table->string('push_distance');
            $table->string('push_frecuncy');
            $table->string('push_hours');
            $table->string('push_moses');
            $table->string('push_year');

            $table->enum('moves', ['1', '0'])->default('0');//halar o empujar
            $table->string('moves_body');
            $table->string('moves_frecuncy');
            $table->string('moves_hours');
            $table->string('moves_moses');
            $table->string('moves_year');

                //biologicos
            $table->enum('organic', ['1', '0'])->default('0');//organicos
            $table->enum('inorganic', ['1' '0'])->default('0');
            $table->enum('animals', ['1', '0'])->default('0');
            $table->enum('waste', ['1', '0'])->default('0');
            $table->string('biologic_hours');
            $table->string('biologic_moses');
            $table->string('biologic_year');

                //mecanicos
            $table->enum('work', ['1', '0'])->default('0');//mecanicos
            $table->enum('guard', ['1' '0'])->default('0');
            $table->enum('others', ['1', '0'])->default('0');
            $table->string('biologic_hours');
            $table->string('biologic_moses');
            $table->string('biologic_year');

                //otros            
            $table->string('other_type');//otros
            $table->string('other_description');
            $table->string('other_time');

                //preguntas adicional
            $table->enum('accident', ['1', '0'])->default('0');//ha sufrido accidents
            $table->string('body_part');
            $table->date('accident_date');
            $table->string('aftermath');

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
