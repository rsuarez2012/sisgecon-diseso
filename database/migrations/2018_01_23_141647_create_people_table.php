<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePeopleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('people', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('dependency_id')->unsigned();
            $table->string('dni', 10)->unique();
            $table->string('first_name', 50);
            $table->string('last_name', 50);
            $table->string('place_of_birth', 50);
            $table->string('marital_status', 50);
            $table->string('address', 50);
            $table->string('telephone', 20);
            $table->string('cellphone', 20);
            $table->string('email', 50);
            $table->integer('employee_type');
            $table->string('position', 50);
            $table->integer('status');
            $table->integer('gender');
            $table->date('birthdate');
            $table->date('date_of_admission');

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
        Schema::dropIfExists('people');
    }
}
