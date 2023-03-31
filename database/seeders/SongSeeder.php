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
        // public function run()
    {
        for($i = 0; $i < 10; $i++) {

        $new_song = new Song;

        $new_song->title = $faker->firstNameFemale();
        $new_song->album = $faker->firstNameMale();
        $new_song->author = $faker->lastName();
        $new_song->editor = $faker->company();
        $new_song->length = $faker->time('i:s');
        $new_song->poster = "https://picsum.photos/200/200";

        $new_song->save();

        };

        // $new_song = new Song;

        // $new_song->title = "Children of the Damned";
        // $new_song->album = "The Number of the Beast";
        // $new_song->author = "Iron Maiden";
        // $new_song->editor = "EMI";
        // $new_song->length = "4:33";
        // $new_song->poster = "https://picsum.photos/200/200";

        // $new_song->save();

        // $new_song = new Song;

        // $new_song->title = "Mother";
        // $new_song->album = "The Wall";
        // $new_song->author = "Pink Floyd";
        // $new_song->editor = "EMI";
        // $new_song->length = "5:32";
        // $new_song->poster = "https://picsum.photos/200/200";

        // $new_song->save();
    }
}
