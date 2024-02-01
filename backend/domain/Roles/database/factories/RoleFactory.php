<?php

namespace Domain\Roles\database\factories;

use Domain\Roles\Models\Role;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class RoleFactory extends Factory
{
    protected $model = Role::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $word = fake()->word;
        return [
            'name' => $word,
            'slug' => Str::slug($word),
            'description' => fake()->sentence,
        ];
    }
}
