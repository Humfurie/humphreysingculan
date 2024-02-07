<?php

namespace Domain\Users\database\factories;

use Domain\Users\Enums\UserStatusEnum;
use Domain\Users\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\Domain\Users\Models\User>
 */
class UserFactory extends Factory
{
    protected static ?string $password;
    protected $model = User::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'username' => fake()->userName,
            'email' => fake()->unique()->safeEmail(),
            'lastname' => fake()->lastName,
            'middlename' => fake()->lastName,
            'password' => Hash::make('password'),
            'firstname' => fake()->firstName,
            'bio' => fake()->sentence,
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    public function verified($verified = true): static
    {
        return $this->state([
            'email_verified_at' => $verified ? now() : null,
        ]);
    }

    public function rememberToken($remember_me = true): static
    {
        return $this->state([
           'remember_token' => $remember_me ? Str::random(10) : null
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
