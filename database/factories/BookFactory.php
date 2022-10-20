<?php

namespace Database\Factories;

use Database\Factories\BookFactory;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class BookFactory extends Factory
{
 /**
  * Define the model's default state.
  *
  * @return array<string, mixed>
  */
 public function definition()
 {
  return [
   "title" => fake()->sentence(),
   "description" => fake()->paragraph(20),
   "url_img" => "https://source.unsplash.com/random/640x480",
   "price" => fake()->randomNumber(3, true),
   "author" => fake()->name(),
   "nombre_pages" => fake()->randomNumber(4, true),
   "created_at" => now(),
  ];
 }
}
