<?php

namespace Database\Factories;

use App\Models\Forum;
use App\Models\Topic;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class TopicFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Topic::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'forum_id' => Forum::inRandomOrder()->first(),
            'poster_id' => User::inRandomOrder()->first(),
            'title' => $this->faker->sentence(),
            'status' => rand(0, 2),
            'type' => rand(0, 3),
        ];
    }
}
