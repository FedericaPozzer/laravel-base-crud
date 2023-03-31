<?php

namespace Database\Seeders;

use App\Models\Song;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Faker\Generator as Faker;

class SongSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        // for($i = 0; $i < 80; $i++) {

        $new_song = new Song;

        $new_song->title = $faker->
        $new_song->album = $faker->
        $new_song->author = $faker->
        $new_song->editor = $faker->
        $new_song->length = $faker->
        $new_song->poster = $faker->

        $new_song->save();

        // };
    }
}
