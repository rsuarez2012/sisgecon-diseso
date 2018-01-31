<?php

use Illuminate\Database\Seeder;

class BeneficiariesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Beneficiary::class, 60)->create();
    }
}
