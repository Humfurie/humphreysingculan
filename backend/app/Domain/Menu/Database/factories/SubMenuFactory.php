<?php

namespace App\Domain\Menu\Database\factories;

use App\Domain\Menu\Models\SubMenu;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Domain\Menu\Models\SubMenu>
 */
class SubMenuFactory extends Factory
{
    protected $model = SubMenu::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $submenu = fake()->word;
        return [
            'name' => $submenu,
            'slug' => Str::slug($submenu),
        ];
    }

    public function hasMenuSection(int $menuSection): SubMenuFactory
    {
        return $this->state([
            'menu_section_id' => $menuSection,
        ]);
    }

    public function hasIcon(string $icon): SubMenuFactory
    {
        return $this->state([
            'icon' => $icon,
        ]);
    }
}
