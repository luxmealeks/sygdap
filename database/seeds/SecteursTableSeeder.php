<?php

use Illuminate\Database\Seeder;

class SecteursTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        factory(\App\Secteur::class, 45)->create();
    }
}
