<?php

namespace App\Livewire\Components;

use App\Domain\Menu\Models\Menu;
use Livewire\Component;

class SideBar extends Component
{
    public $menus;

    public function mount(): void
    {
        $sideBar = Menu::whereSlug('side-bar')->with('menuSections.subMenus')->first();
//        dd($sideBar->menuSections);
        $this->menus = $sideBar->menuSections;
    }

    public function render(): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        return view('livewire.components.side-bar', [
            'menu' => $this->menus,
        ]);
    }
}
