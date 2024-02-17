<?php

namespace App\Livewire\Menu;

use Domain\Menu\Models\Menu;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;
use Livewire\Component;

class CreateMenu extends Component
{
    public $name, $section_menu = [], $sub_menu = [];

    public function save()
    {
        $this->validate();
//        dd($this->name, $this->section_menu, $this->sub_menu);
        DB::transaction(function () {
            $menu = Menu::create([
                'name' => $this->name,
                'slug' => Str::slug($this->name)
            ]);

            $menu_section = $menu->menuSections()->create([
                'Menu_id' => $menu->id,
                'name' => $this->section_menu->name,
                'slug' => Str::slug($this->section_menu->name),
            ]);

            $sub_menu = $menu_section->subMenus()->create([
                'menu_section_id' => $menu_section->id,
                'name' => $this->sub_menu->name,
                'slug' => Str::slug($this->sub_menu->name),
                'icon' => $this->sub_menu->icon
            ]);
        });
    }

    public function render()
    {
        return view('livewire.menu.create-menu')->layout('layouts.app');
    }

    public function rules()
    {
        return [
            'name' => ['required', Rule::unique('menus')],
            'section_menu.name' => ['required'],
            'sub_menu.name' => ['required'],
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Menu Name field is required.',
            'name.unique' => 'Name has already been taken.',
            'section_menu.name.required' => 'Section Name field is required.',
            'sub_menu.name.required' => 'Sub Menu Name field is required.',
        ];
    }
}
