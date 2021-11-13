<?php

use Illuminate\Database\Seeder;

class UnitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'unit_type'=> "Amp Watts",
                'description'=>'Number of Amplifier Watts',
            ],
            [
                'unit_type'=> "Frets",
                'description'=>'Number of Frets',
            ],
            [
                'unit_type'=> "Strings",
                'description'=>'Number of Strings',
            ],
            [
                'unit_type'=> "Cable Length",
                'description'=>'Length of Guitar Cable',
            ],
        ];
        foreach($data as $u){
            \App\Unit::create($u);
        }
    }
}