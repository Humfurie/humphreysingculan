<div class="w-full h-full"
     x-data="{
     create:false,
     }"
>
    <div class="flex flex-col bg-white overflow-hidden shadow-xl sm:rounded-lg">
        <div class="p-8 flex flex-col">
            <div class="">
                <button
                    x-show="!create"
                    @click="create = !create"
                    type="button"
                    class="bg-cyan-800 text-white align-middle select-none font-sans font-bold text-center uppercase transition-all text-xs py-3 px-6
                   rounded-lg shadow-gray-900/10 hover:shadow-lg hover:shadow-gray-900/20 focus:opacity-[0.85] focus:shadow-none
                   active:opacity-[0.85] active:shadow-none flex items-center gap-3 hover:bg-orange-200 dark:hover:text-black">
                    Create
                </button>
                <button
                    x-show="create"
                    @click="create = !create"
                    type="button"
                    class="bg-cyan-800 text-white align-middle select-none font-sans font-bold text-center uppercase transition-all text-xs py-3 px-6
                   rounded-lg shadow-gray-900/10 hover:shadow-lg hover:shadow-gray-900/20 focus:opacity-[0.85] focus:shadow-none
                   active:opacity-[0.85] active:shadow-none flex items-center gap-3 hover:bg-orange-200 dark:hover:text-black">
                    Close
                </button>
            </div>
            <div x-show="create"
                 x-transition:enter.duration.500ms
                 x-transition:leave.duration.400ms>
                <x-form submit="save">
                    <x-slot name="form">
                        <div class="col-span-4">
                            <x-label for="name" value="{{ __('Menu Name') }}"/>
                            <x-input id="name" type="text" class="mt-1 block w-full" wire:model="name"
                                     autocomplete="name"/>
                            <x-input-error for="name" class="mt-2"/>
                        </div>
                        <x-action-message class="me-3" on="saved">
                            {{ __('Saved.') }}
                        </x-action-message>

                        <x-button class="justify-center">
                            {{ __('Save') }}
                        </x-button>
                    </x-slot>
                </x-form>
            </div>
        </div>
        <table class="w-full text-sm text-left rtl:text-right text-gray-500">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50">
            <tr>
                <th scope="col" class="px-6 py-3">name</th>
                <th scope="col" class="px-6 py-3 hidden sm:table-cell">slug</th>
                <th scope="col" class="px-6 py-3 hidden md:block">created_at</th>
                <th scope="col" class="px-6 py-3">actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($items as $item)
                <tr class="hover:bg-cyan-900 transition-all shadow-gray-900/10 hover:shadow-lg
                hover:shadow-gray-900/20 hover:text-white focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85]
                active:shadow-none cursor-pointer py-3 px-6 rounded-lg"
                    onclick="window.location='{{ route("$resource.create") }}';">
                    <th scope="row"
                        class="px-6 py-4 font-medium text-black hover:text-white whitespace-nowrap">{{$item->name}}</th>
                    <td class="px-6 py-4 hidden sm:table-cell">{{$item->slug}}</td>
                    <td class="px-6 py-4 hidden md:block">{{$item->created_at}}</td>
                    <td class="px-6 py-4">
                        <a href="#" class="font-medium text-blue-600 hover:underline">Edit</a>
                        <a href="#" class="font-medium text-blue-600 hover:underline">Delete</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
