<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $user = User::count() >= 20 ? User::inRandomOrder()->first()->id : User::factory();

        return [
            'user_id'       => $user,
            'title'         => $this->faker->realText(30),
            'content'       => $this->faker->realText(),
            'created_at'    => $this->faker->dateTimeThisMonth(),
        ];
    }
}
