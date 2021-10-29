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
            'sport',
            'tecnologia',
            'video giochi',
            'giochi',
            'utensili',
            'attrezzi'
        ];

        foreach($categories as $category) {
            $nuovaCategoria = new Category();
            $nuovaCategoria->name = $category;
            $nuovaCategoria->save(); 
        }
    }
}
