<?php

namespace Domain\Users\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Domain\Roles\Models\Role;
use Domain\Users\Enums\UserStatusEnum;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

/**
 * @method static \Illuminate\Database\Query\Builder create(array $array)
 * @method static \Illuminate\Database\Query\Builder whereEmail(string $email)
 */
class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = [
        'username',
        'email',
        'password',
        'first_name',
        'last_name',
        'middle_name',
        'email_verified_at',
        'bio',
        'status',
        'last_login_date',
        'verification_token',
        'remember_token',
    ];

    protected $hidden = [
        'password',
        'verification_token',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
        'registration_date' => 'datetime',
        'last_login_date' => 'datetime',
        'status' => UserStatusEnum::class,
    ];

    public function roles(): BelongsToMany
    {
        return $this->belongsToMany(Role::class, 'user_roles');
    }
}
