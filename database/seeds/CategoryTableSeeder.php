<?php

use App\Category;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $categories = [
            'sport', // 1
            'tecnologia', // 2
            'video giochi', // 3
            'giochi', // 4
            'utensili', // 5
            'attrezzi', // 6
            'auto', // 7
            'moto', // 8
            'protezioni' // 9
        ];

        foreach($categories as $category) {
            $nuovaCategoria = new Category();
            $nuovaCategoria->name = $category;
            $nuovaCategoria->save(); 
        }
    }
}
