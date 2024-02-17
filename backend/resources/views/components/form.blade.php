@props(['submit'])

<div {{ $attributes->merge(['class' => 'md:grid md:grid-cols-2 md:gap-6']) }}>
    <div class="md:col-span-1 flex justify-between">
        <div class="px-4 sm:px-0">
            <h3 class="text-lg font-medium text-gray-900">{{ $title }}</h3>
        </div>

        <div class="px-4 sm:px-0">
            {{ $aside ?? '' }}
        </div>
    </div>

    <div class="mt-5 md:mt-0 md:col-span-2">
        <form wire:submit.prevent="{{ $submit }}">
            <div
                class="px-4 py-5 bg-white sm:p-6 shadow {{ isset($actions) ? 'sm:rounded-tl-md sm:rounded-tr-md' : 'sm:rounded-md' }}">
                <div class="grid grid-cols-6 lg:col-span-8 gap-6">
                    {{ $form }}
                </div>
            </div>

            @if (isset($actions))
                <div
                    class="flex items-center justify-end px-4 py-3 bg-gray-50 text-end sm:px-6 shadow sm:rounded-bl-md sm:rounded-br-md">
                    {{ $actions }}
                </div>
            @endif
        </form>
    </div>
</div>
