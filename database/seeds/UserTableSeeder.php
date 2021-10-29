<?php

use Illuminate\Database\Seeder;
use App\User;
use Faker\Generator as Faker;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        // Utenti pre caricati:
        $nomiUtenti = [
            'venditore1',
            'venditore2',
            'parix1999',
        ];

        $indirizzi = [
            'via della strada',
            'via del venditore',
            'via Enrico Fermi',
        ];

        for($i = 0; $i < count($nomiUtenti); $i++) {
            // Nuovo oggetto:
            $nuovoUtente = new User();
            $nuovoUtente->name = $nomiUtenti[$i];
            $nuovoUtente->email = $faker->email();
            $nuovoUtente->password = $faker->password(); 
            $nuovoUtente->address = $indirizzi[$i]; 
            $nuovoUtente->save(); 
        }
        
    }
}
