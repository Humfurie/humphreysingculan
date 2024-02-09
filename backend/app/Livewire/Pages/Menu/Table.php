<?php

namespace App\Livewire\Pages\Menu;

use Domain\Menu\Models\Menu;
use Livewire\Component;

class Table extends Component
{
    public $menu;

    public function mount(): void
    {
        $this->menu = Menu::whereSlug('side-bar')->with('menuSections.subMenus')->get();
    }

    public function render(): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        return view('livewire.pages.menu.table', ['menus' => $this->menu]);
    }
}
