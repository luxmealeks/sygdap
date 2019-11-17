<?php

use Illuminate\Database\Seeder;

class PiecesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        factory(\App\Piece::class, 5)->create();
    }
}
