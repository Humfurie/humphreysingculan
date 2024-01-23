<?php

namespace Domain\Users\database\factories;

use Domain\Users\Enums\UserStatusEnum;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\Domain\Users\Models\User>
 */
class UserFactory extends Factory
{
    protected static ?string $password;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'email' => fake()->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password' => static::$password ??= Hash::make('password'),
            'remember_token' => Str::random(10),
            'username' => fake()->userName,
            'first_name' => fake()->firstName,
            'last_name' => fake()->lastName,
            'middle_name' => fake()->lastName,
            'bio' => fake()->sentence,
            'status' => fake()->randomElement(UserStatusEnum::class),
            'last_login_date' => now(),
            'verification_token' => Str::random(16),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state([
            'email_verified_at' => null,
        ]);
    }

    public function rememberToken(): static
    {
        return $this->state([
           'remember_token' => null
        ]);
    }

    public function activeStatus(): static
    {
        return $this->state([
            'status' => UserStatusEnum::ACTIVE
        ]);
    }

    public function inactiveStatus(): static
    {
        return $this->state([
            'status' => UserStatusEnum::INACTIVE
        ]);
    }

    public function suspendedStatus(): static
    {
        return $this->state([
            'status' => UserStatusEnum::SUSPENDED
        ]);
    }

    public function bannedStatus(): static
    {
        return $this->state([
            'status' => UserStatusEnum::BANNED
        ]);
    }
}
