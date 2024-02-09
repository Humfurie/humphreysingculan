<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="w-full h-full  p-2 bg-blue-600">
        <div class="flex flex-col bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <section class="grid grid-cols-4 p-20">
                <div>1</div>
                <div>1</div>
                <div>1</div>
                <div>1</div>
            </section>
            <section class="grid grid-cols-4 p-20">
                <div class="col-span-3">1</div>
                <div>1</div>
            </section>
            <section class="grid grid-cols-4 p-20">
                <div class="col-span-3">1</div>
                <div>1</div>
            </section>
            <section class="grid grid-cols-4 p-20">
                <div class="col-span-3">1</div>
                <div>1</div>
            </section>
            <section class="grid grid-cols-4 p-20">
                <div class="col-span-3">1</div>
                <div>1</div>
            </section>
            <section class="grid grid-cols-4 p-20">
                <div class="col-span-3">1</div>
                <div>1</div>
            </section>
        </div>
    </div>
</x-app-layout>
