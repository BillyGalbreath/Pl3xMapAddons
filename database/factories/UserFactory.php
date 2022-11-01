<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory {
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

    /**
     * Define the model's default state.
     *
     * @return array{string, mixed}
     */
    public function definition(): array {
        return [
            'username' => fake()->username(),
            'realname' => fake()->name(),
            'email' => fake()->unique()->safeEmail(),
            'github_id' => $this->faker->randomNumber(6),
            'github_avatar' => $this->faker->imageUrl(),
            'github_token' => Str::random(40),
            'github_refresh_token' => null,
            'remember_token' => Str::random(10),
        ];
    }
}
