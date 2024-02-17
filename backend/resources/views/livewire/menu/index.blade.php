<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Menu') }}
    </h2>
</x-slot>

<x-table :items="$menus" :resource="$resource"/>


