<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\{User, Post, Reply};

class ReplyFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Reply::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'reply_content' => $this->faker->text($maxNbChars = 200),
            'image_attachement' => $this->faker->imageUrl($width = 640, $height = 480),
            'upvote_count' => $this->faker->randomNumber($nbDigits = NULL, $strict = false),
            'user_id' => User::factory(),
            'post_id' => Post::factory()
        ];
    }
}
