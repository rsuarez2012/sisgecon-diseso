<?php

use Faker\Generator as Faker;
//use Faker\Provider\es_PE;




$factory->define(App\People::class, function (Faker $faker) {
	//$faker->addProvider(new Faker\Provider\es_PE\Person($faker));
    return [
       'dni' => $faker->unique()->ean8('########'),
	   'first_name' => $faker->firstName,
	   'place_of_birth' => $faker->city,
	   'last_name' => $faker->lastName,
	   'marital_status' => $faker->randomElement($array = array ('1','2')),
	   'address' => $faker->city,
	   'telephone' => $faker->e164PhoneNumber,
	   'cellphone' => $faker->tollFreePhoneNumber,
	   'gender' => strtoupper($faker->randomElement($array = array ('1' ,'2'))),
	   'position' => $faker->firstName,
	   'employee_type' => strtoupper($faker->randomElement($array = array ('1' ,'2', '3', '4', '5', '6'))),
	   'status' => strtoupper($faker->randomElement($array = array ('1' ,'2', '3'))),
	   'birthdate' => $faker->date($format = 'Y-m-d', $max = '2000-01-01'),
	   'date_of_admission' => $faker->date($format = 'Y-m-d', $max = 'now'),
	   'email' => $faker->safeEmail,


    ];
});
