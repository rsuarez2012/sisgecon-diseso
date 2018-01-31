<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBeneficiariesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('beneficiaries', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('people_id')->unsigned();
            $table->string('dni', 12)->unique();
            $table->string('first_name');
            $table->string('last_name');
            $table->date('birthdate');
            $table->string('relationship');//parentesco con el titular
            $table->enum('gender', ['FEMENINO', 'MASCULINO']);
            $table->timestamps();


            //relacion con titulares
            /*$table->foreign('people_id')->references('id')->on('people')
                ->onDelete('cascade')
                ->onUpdate('cascade');*/

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('beneficiaries');
    }
}
