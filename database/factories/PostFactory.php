<?php

namespace Database\Factories;

use App\Models\Post;
use App\Models\Topic;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

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
            'topic_id' => Topic::inRandomOrder()->first(),
            'poster_id' => User::inRandomOrder()->first(),
            'poster_ip' => $this->faker->ipv4,
            'text' => $this->faker->text(),
        ];
    }
}
