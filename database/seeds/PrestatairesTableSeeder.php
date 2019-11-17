<?php

use Illuminate\Database\Seeder;

class PrestatairesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        factory(\App\Prestataire::class, 5)->create();
    }
}
