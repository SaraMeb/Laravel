<?php

use Illuminate\Database\Seeder;

class GenresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('genres')->insert([
        [
          "name" => "Fantacy",
        ],
        [
          "name" => "Horror",
        ],
        [
          "name" => "Love Story",
        ],
        [
          "name" => "Science Fiction",
        ],
        [
          "name" => "Hard Science",
        ],
      ]);
    }
}
