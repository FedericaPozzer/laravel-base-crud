<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // qui va scritto questo perchè se no quando popolo la tabella con il mio seeder con 
        // php artisan db:seed 
        // non funziona a meno che il comando non abbia l'aggiunta 
        // php artisan db:seed --class=SongSeeder
        // che non va bene perchè se hai tremila seeder è meglio scriverli tutti qui e poi lanciare un comando per tutti (appunto php artisan db:seed)

        // $this->call([
            // SongSeeder::class,
        // ])
    }
}
