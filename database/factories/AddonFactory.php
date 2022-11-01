<?php

namespace Database\Factories;

use App\Models\Addon;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Addon>
 */
class AddonFactory extends Factory {
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Addon::class;

    /**
     * Define the model's default state.
     *
     * @return array{string, mixed}[]
     */
    public function definition(): array {
        return [
            'user_id' => User::factory(),
            'title' => $this->faker->word(),
            'icon' => $this->faker->imageUrl(),
            'slug' => null,
            'summary' => $this->faker->sentence(),
            'description' => $this->faker->paragraph(),
            'created_at' => $this->faker->dateTimeThisDecade(),
            'updated_at' => $this->faker->dateTimeThisDecade(),
        ];
    }
}
