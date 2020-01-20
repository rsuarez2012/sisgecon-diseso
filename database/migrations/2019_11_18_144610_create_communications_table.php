<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommunicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('communications', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('dependency_id')->unsigned();
            $table->foreign('dependency_id')->references('id')->on('dependencies');
            $table->integer('director_id')->unsigned();
            $table->foreign('director_id')->references('id')->on('executives');
            $table->string('affair');//asunto
            $table->date('date');
            $table->text('body');
            $table->integer('number');
            $table->enum('annexed', ['0', '1'])->default('0');
            $table->integer('communucation_type');
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
        Schema::dropIfExists('communications');
    }
}
