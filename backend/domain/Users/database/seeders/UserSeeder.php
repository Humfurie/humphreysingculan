<?php

namespace Domain\Users\database\seeders;

use Domain\Users\database\factories\UserFactory;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //admin
        UserFactory::new([
            'username' => 'humfurie',
            'email' => 'humfurie@gmail.com',
            'password' => 'Humfurie',
            'first_name' => 'Humphrey',
            'last_name' => 'Singculan',
            'middle_name' => 'Tajanlangit',
            'bio' => 'I am what I am',
        ])->activeStatus()
            ->rememberToken()
            ->createOne();
    }
}
