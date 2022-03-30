<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $categories = [
            'Apkepai',
            'Blynai',
            'Desertai',
            'Gėrimai',
            'Kepiniai, pyragai',
            'Kepsniai, antrieji',
            'Konservuoti patiekalai',
            'Košės, tyrės',
            'Mišrainės, salotos',
            'Saldumynai'
        ];

        return [
            'title' => $this->faker->unique()->randomElement($categories),
            'description' => $this->faker->paragraph(),
            'cover' => $this->faker->imageUrl
        ];
    }
}
