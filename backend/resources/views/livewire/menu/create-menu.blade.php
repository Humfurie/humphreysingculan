<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Create Menu') }}
    </h2>
</x-slot>

<x-form submit="save">
    <x-slot name="title">
        {{ __('Create Menu') }}
    </x-slot>
    <x-slot name="form">
        <div class="col-span-4">
            <x-label for="name" value="{{ __('Menu Name') }}"/>
            <x-input id="name" type="text" class="mt-1 block w-full" wire:model="name"
                     autocomplete="name"/>
            <x-input-error for="name" class="mt-2"/>
        </div>

        <div class="col-span-4">
            <x-label for="section_menu_name" value="{{ __('Menu Section Name') }}"/>
            <x-input id="section_menu_name" type="text" class="mt-1 block w-full" wire:model="section_menu.name"
                     autocomplete="section_menu_name"/>
            <x-input-error for="section_menu.name" class="mt-2"/>
        </div>

        <div class="col-span-4">
            <x-label for="sub_menu_name" value="{{ __('Sub Menu Name') }}"/>
            <x-input id="sub_menu_name" type="text" class="mt-1 block w-full" wire:model="sub_menu.name"
                     autocomplete="sub_menu_name"/>
            <x-input-error for="sub_menu.name" class="mt-2"/>
        </div>

        <div class="col-span-4">
            <x-label for="icon" value="{{ __('Icon') }}"/>
            <x-input id="icon" type="text" class="mt-1 block w-full" wire:model="sub_menu.icon"
                     autocomplete="sub_menu_icon"/>
            <x-input-error for="sub_menu.icon" class="mt-2"/>
        </div>
    </x-slot>

    <x-slot name="actions">
        <x-action-message class="me-3" on="saved">
            {{ __('Saved.') }}
        </x-action-message>

        <x-button>
            {{ __('Save') }}
        </x-button>
    </x-slot>
</x-form>

