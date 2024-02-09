<?php

namespace Domain\Menu\Database\factories;

use Domain\Menu\Models\MenuSection;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\Domain\Menu\Models\MenuSection>
 */
class MenuSectionFactory extends Factory
{
    protected $model = MenuSection::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $name = fake()->word;
        return [
            'name' => $name,
            'slug' => Str::slug($name),
        ];
    }

    public function hasMenu(int $menu): MenuSectionFactory
    {
        return $this->state([
            'menu_id' => $menu
        ]);
    }
}
