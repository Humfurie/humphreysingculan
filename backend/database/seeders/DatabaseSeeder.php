<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Domain\Menu\Database\seeders\MenuSeeder;
use Domain\Roles\database\seeders\RoleSeeder;
use Domain\Users\database\seeders\UserSeeder;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        try {
            DB::beginTransaction();

            $this->call(RoleSeeder::class);
            $this->call(UserSeeder::class);
            $this->call(MenuSeeder::class);

            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();
        }
    }
}
