<?php

use App\Product;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker; 

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $nomeProdotti = [
            // User 1:
            'Ps4',
            'Ps2',
            'Gta 5',
            'Pinarello',
            
            // User 2:
            'iphone 12 pro max',
            'airpods 1 generazione',

            // User 3:
            'ktm 125 2017',
            'casco airoh terminator',
        ];

        $imgProdotti = [
            // User 1:
            'image/product/ps4.jpeg',
            'image/product/ps2.jpeg',
            'image/product/gta5.jpeg',
            'image/product/pinarello.jpeg',

            // User 2:
            'image/product/iphone.jpeg',
            'image/product/airpods.jpeg',

            // User 3:
            'image/product/ktm.jpeg',
            'image/product/casco.jpeg',

        ];

        $userIdList = [
            // User 1:
            1,
            1,
            1,
            1,

            // User 2:
            2,
            2,

            // User 3:
            3,
            3,
        ];

        $categoryIdList = [
            // User 1:
            3,
            3,
            3,
            1,

            // User 2:
            2,
            2,

            // User 3:
            8,
            9,
        ];

        $descrizioneList = [
            // User 1:
            'Ps4 in ottime condizioni, perfettamente funzionante. Vendo perchè voglio prendere la 5.',
            'Ps2 perfettamente funzionante, cimelio storico protetto dall \' Unesco. Vendo per liberare spazio.',
            'Gioco GTA 5, vendo perchè non lo voglio più.',
            'Bici pinarello da competizione, con questa si vola.',

            // User 2:
            'Iphone 12 pro max nuovo, usato pochissimo con apple care. da 256gb',
            'Cuffie usate due volte, vendo con la custodia.',

            // User 3:
            'Vendo ktm 125 2t 2017 con pochissime ore, pistone rifatto.',
            'Casco airoh in vendita, seminuovo.',
        ];

        $prezziList = [
            // User 1:
            300.00,
            150.00,
            45.00,
            1200.50,

            // User 2:
            900.00,
            120.00,

            // User 3:
            7500.00,
            250.00,
        ];

        for($x = 0; $x < count($nomeProdotti); $x++) {
            $nuovoProdotto = new Product();
            $nuovoProdotto->name = $nomeProdotti[$x];
            $nuovoProdotto->picture = $imgProdotti[$x];
            $nuovoProdotto->user_id = $userIdList[$x];
            $nuovoProdotto->category_id = $categoryIdList[$x];
            $nuovoProdotto->description = $descrizioneList[$x];
            $nuovoProdotto->price = $prezziList[$x]; 

            $nuovoProdotto->save(); 
        }
    }
}
