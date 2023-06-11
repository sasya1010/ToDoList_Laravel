<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class TaskFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title_act' => $this->faker->sentence(mt_rand(2,4)),
            'desc_act' => $this->faker->sentence(mt_rand(10,20)),
            'deadline' => $this->faker->date(),
            'status_act'=> $this->faker->randomElement(['finished', 'not finished yet']),
            'category_id' => $this->faker->numberBetween(1,2)
        ];
    }
}
