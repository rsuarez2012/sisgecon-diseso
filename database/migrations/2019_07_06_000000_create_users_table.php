<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('first_name');
            $table->string('last_name')->nullable();
            $table->string('dni')->nullable();
            $table->string('telephone')->nullable();
            $table->string('email')->unique();
            $table->string('password');
            $table->string('especialidad')->nullable();
            $table->boolean('status')->default(1);
            $table->integer('rol_id')->unsigned();
            $table->foreign('rol_id')->references('id')->on('roles');
            $table->rememberToken();
            $table->timestamps();
        });
        DB::table('users')->insert(array(
            'id'             => '1', 
            'first_name'     => 'raul', 
            'email'          => 'rsuarez@unerg.edu.ve', 
            'password'       => '$2y$10$SEaPm2UXVsQMeSstgE0G2edU08AL.7qKRq6smSQSJlWRxoPkZHsNW', 
            'remember_token' => 'x8VIkpalyNZspnTVbSD6gvLzuUf5cSDoZ63exZqCVIIz3W2kk4orO6704zzJ', 
            'rol_id'         => '1',
            'status'         => '1'
        ));
        //DB::table('roles')->insert(array('id'=>'1', 'name'=>'admin', 'description'=>'Administrador del Sistema'));
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
