<?php

namespace Domain\Menu\Database\seeders;

use Domain\Menu\Database\factories\MenuFactory;
use Domain\Menu\Database\factories\MenuSectionFactory;
use Domain\Menu\Database\factories\SubMenuFactory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MenuSeeder extends Seeder
{
    /**
     * Run the Database seeds.
     */
    public function run(): void
    {
        try {
            DB::beginTransaction();
            $menu = MenuFactory::new([
                'name' => 'Side Bar',
                'slug' => 'side-bar'
            ])->create();

            $menuSection = MenuSectionFactory::new([
                'name' => 'Admin',
                'slug' => 'admin'
            ])->hasMenu($menu->id)
                ->create();

            SubMenuFactory::new([
                'name' => 'User Management',
                'slug' => 'user-management',
            ])->hasMenuSection($menuSection->id)
                ->hasIcon('heroicon-o-user-group')
                ->create();

            SubMenuFactory::new([
                'name' => 'Role Management',
                'slug' => 'role-management',
            ])->hasMenuSection($menuSection->id)
                ->hasIcon('eos-role-binding-o')
                ->create();
            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();
            dd($e->getMessage());
        }
    }
}
