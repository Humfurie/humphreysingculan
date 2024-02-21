<?php

namespace App\Domain\Roles\database\seeders;

use App\Domain\Roles\database\factories\RoleFactory;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        RoleFactory::new([
            'name' => 'admin',
            'slug' => 'admin',
            'description' => 'this is admin role',
        ])->createOne();
    }
}
