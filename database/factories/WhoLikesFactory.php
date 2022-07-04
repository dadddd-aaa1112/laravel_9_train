<?php

namespace Database\Factories;

use App\Models\WhoLikes;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\WhoLikes>
 */
class WhoLikesFactory extends Factory
{
    protected $model = WhoLikes::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'titleLikes' => $this->faker->word,
        ];
    }
}
