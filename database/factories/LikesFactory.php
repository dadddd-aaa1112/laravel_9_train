<?php

namespace Database\Factories;

use App\Models\Likes;
use App\Models\WhoLikes;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Likes>
 */
class LikesFactory extends Factory
{
    protected $model = Likes::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(1),
            'desc' => $this->faker->word,
            'whoLikes_id' => WhoLikes::get()->random()->id,
        ];
    }
}
