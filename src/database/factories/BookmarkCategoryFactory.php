<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\BookmarkCategory>
 */
class BookmarkCategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'display_name' => 'カテゴリ' . $this->faker->word(),
            'slug' => urlencode($this->faker->sentence(2)),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
