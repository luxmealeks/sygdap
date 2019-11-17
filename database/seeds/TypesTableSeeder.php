<?php

use Illuminate\Database\Seeder;

class TypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $type1 = App\Type::firstOrCreate(['libelle' => 'Services'], ['uuid' => Str::uuid()]);
        $type2 = App\Type::firstOrCreate(['libelle' => 'Fournitures'], ['uuid' => Str::uuid()]);
        $type3 = App\Type::firstOrCreate(['libelle' => 'Travaux'], ['uuid' => Str::uuid()]);
        $type4 = App\Type::firstOrCreate(['libelle' => 'Cabinets de consultants'], ['uuid' => Str::uuid()]);
        $type5 = App\Type::firstOrCreate(['libelle' => 'Consultants individuels'], ['uuid' => Str::uuid()]);
    }
}
