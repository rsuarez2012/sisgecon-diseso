<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReposesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reposes', function (Blueprint $table) {
            $table->increments('id');
            //titular
            $table->integer('people_id')->unsigned();
            $table->date('date');
            $table->string('pathology');
            $table->date('since');
            $table->date('until');
            $table->string('doctor_issues');
            $table->string('valid_doctor');
            $table->string('specialty');
            $table->string('rest_days');

            $table->softDeletes(); //Nueva línea, para el borrado lógico
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
        Schema::dropIfExists('reposes');
    }
}
