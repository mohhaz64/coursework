<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\{Post, User};

class PostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Post::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'post_title' => $this->faker->text($maxNbChars = 20),
            'post_content' => $this->faker->text($maxNbChars = 200),
            'image_attachment' => $this->faker->imageUrl($width = 640, $height = 480),
            'upvote_count' => $this->faker->randomNumber($nbDigits = NULL, $strict = false),
            'user_id' =>  User::factory()
        ];
    }
}
