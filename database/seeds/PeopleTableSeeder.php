<?php

use Illuminate\Database\Seeder;

class PeopleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\People::class, 20)->create();

        DB::table('users')->insert([
        'name'  => 'Jhon Smith',
        'email'     => 'admin@gmail.com',
        'password'  => bcrypt('123456'),
    ]);
    }
}
