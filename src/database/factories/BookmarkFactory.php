<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Smknstd\FakerPicsumImages\FakerPicsumImagesProvider;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Bookmark>
 */
class BookmarkFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'url' => $this->faker->url,
            'comment' => $this->faker->realText(100),
            'page_title' => '' . $this->faker->word,
            'page_thumbnail_url' => FakerPicsumImagesProvider::imageUrl(),
            'page_description' => $this->faker->realText(200),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
