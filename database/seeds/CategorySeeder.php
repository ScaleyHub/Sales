<?php

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
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
                'category'=> "Guitar Shape",
                'description'=>'All Guitar Shape items',
            ],
            [
                'category'=> "Wood Type",
                'description'=>'All Guitar Wood type items',
            ],
            [
                'category'=> "Fretboard",
                'description'=>'All Guitar Fretboard items',
            ],
            [
                'category'=> "Pickup Type",
                'description'=>'All Pickup Type items',
            ],
            [
                'category'=> "Guitar Surplus",
                'description'=>'All Guitar Surplus items',
            ],
        ];
        foreach($data as $c){
            \App\Category::create($c);
        }
    }
}
