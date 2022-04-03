<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Recipe>
 */
class RecipeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $categories = Category::pluck('id')->toArray();
        $users = User::pluck('id')->toArray();

        return [
            'title' => $this->faker->words(3, true),
            'description' => $this->faker->paragraph(),
            'cover' => $this->faker->imageUrl,
            'category_id' => $this->faker->randomElement($categories),
            'user_id' => $this->faker->randomElement($users)
        ];
    }
}
