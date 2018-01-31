<?php

use Faker\Generator as Faker;

$factory->define(App\Beneficiary::class, function (Faker $faker) {
    return [
    	//seleccion aleatoria de los titulares entre el id 1 y el 20
        'people_id' 	=> rand(1,20),
        //cedula de los beneficiarios siendo esta de 12 valores ya que los niños menores se representa con el dni del titular mas un - y un numero ejemplo 12345678-1
        'dni' => $faker->unique()->ean8('############'),
        //nombre del beneficiario
	    'first_name' => $faker->firstName,
	    //apellido del beneficiario
	   'last_name' => $faker->lastName,
	   //fecha de nacimiento
	   'birthdate' => $faker->date($format = 'Y-m-d', $max = 'now'),
	   //parentesco con el titular ejemplo 1=madre,2=padre,3=hijo(a),4=conyuge,5=otro,
	   'relationship' => strtoupper($faker->randomElement($array = array ('1' ,'2', '3', '4', '5'))),
	   //sexo del beneficiario
	   'gender' => strtoupper($faker->randomElement($array = array ('FEMENINO' ,'MASCULINO'))),





    ];
});
