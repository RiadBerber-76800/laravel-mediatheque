<?php

namespace Database\Seeders;

use App\Models\Book;
use Database\Seeders\BookSeeder;
use Faker\Factory;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
 /**
  * Run the database seeds.
  *
  * @return void
  */
 public function run()
 {
  $faker = Factory::create();
  for ($i = 0; $i < 20; $i++) {
   Book::create([
    "title" => fake()->sentence(),
    "description" => fake()->text($maxNbChars = 600),
    "url_img" => "https://source.unsplash.com/random/640x480",
    "price" => fake()->randomNumber(3, true),
    "author" => fake()->name(),
    "nombre_pages" => fake()->randomNumber(4, true),
    "created_at" => now(),
   ]);
  }
 }
}
