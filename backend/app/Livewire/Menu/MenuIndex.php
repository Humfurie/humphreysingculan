<?php

namespace App\Livewire\Menu;

use App\Domain\Menu\Models\Menu;
use Livewire\Component;

class MenuIndex extends Component
{
    public $resource = "menu";
    public $menus;

    public function mount()
    {
        $this->menus = Menu::with('menuSections.subMenus')->get();
    }

    public function render()
    {
        return view('livewire.menu.index', ['menus' => $this->menus, 'resource' => $this->resource]);
    }
}
