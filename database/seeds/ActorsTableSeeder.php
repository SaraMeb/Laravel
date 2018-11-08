<?php

use Illuminate\Database\Seeder;

class ActorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('actors')->insert([
        [
          "first_name" => "Tom",
          "last_name" => "Hiddleston",
        ],
        [
          "first_name" => "Tom",
          "last_name" => "Hardy",
        ],
        [
          "first_name" => "Kit",
          "last_name" => "Harrington",
        ],
        [
          "first_name" => "Matt",
          "last_name" => "Smith",
        ],
        [
          "first_name" => "Cillian",
          "last_name" => "Murphy",
        ],
        [
          "first_name" => "Jensen",
          "last_name" => "Ackles",
        ],
        [
          "first_name" => "Misha",
          "last_name" => "Collins",
        ],
        [
          "first_name" => "Milly",
          "last_name" => "Bobby Brown",
        ],
        [
          "first_name" => "Emilia",
          "last_name" => "Clarke",
        ],
        [
          "first_name" => "Claire",
          "last_name" => "Danes",
        ],
      ]);
    }
}
