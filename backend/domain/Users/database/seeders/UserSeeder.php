<?php

namespace Domain\Users\database\seeders;

use Domain\Roles\Models\Role;
use Domain\Users\database\factories\UserFactory;
use Illuminate\Database\Seeder;
use PragmaRX\Google2FA\Google2FA;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //admin
        $role = Role::where('name', 'admin')->first();
        $google2fa = new Google2FA();
        $user = UserFactory::new([
            'username' => 'humfurie',
            'email' => 'humfurie@gmail.com',
            'password' => 'Humfurie',
            'firstname' => 'Humphrey',
            'lastname' => 'Singculan',
            'middlename' => 'Tajanlangit',
            'bio' => 'I am what I am',
        ])
            ->verified()
            ->activeStatus()
            ->rememberToken()
            ->createOne();

        $user->roles()->attach($role);
    }
}
