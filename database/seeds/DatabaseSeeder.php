<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	//seeder de usuarios
        // $this->call(UsersTableSeeder::class);
    	//seeder de titulares
    	$this->call(PeopleTableSeeder::class);
        //seeder de beneficiarios
        $this->call(BeneficiariesTableSeeder::class);
        
    }
}
