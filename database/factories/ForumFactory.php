<?php

namespace Database\Factories;

use App\Models\Forum;
use Illuminate\Database\Eloquent\Factories\Factory;

class ForumFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Forum::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'parent_id' => null,
            'left_id' => null,
            'right_id' => null,
            'name' => $this->faker->sentence(),
            'description' => $this->faker->sentence(20),
            'type' => 1,
            'link' => null,
        ];
    }
}
