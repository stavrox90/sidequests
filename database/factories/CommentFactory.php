<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Post;
use App\Models\User;

class CommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $user       = User::count() >= 20 ? User::inRandomOrder()->first()->id : User::factory();
        $post       = Post::count() >= 20 ? Post::inRandomOrder()->first()->id : Post::factory();
        // $created_at = $this->faker->dateTimeThisMonth();
        $created_at = $this->faker->dateTimeBetween('-1 day');

        return [
            'user_id'       => $user,
            'post_id'       => $post,
            'reply'         => $this->faker->realText(60),
            'created_at'    => $created_at,
        ];
    }
}
