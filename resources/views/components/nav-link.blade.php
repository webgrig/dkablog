@props(['active'])

@php
$classes = ($active ?? false)
            ? 'inline-flex items-center px-1 pt-1 border-b-2 border-indigo-400 text-sm font-medium leading-5 text-gray-900 focus:outline-none focus:border-indigo-700 transition duration-150 ease-in-out'
            : 'inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-medium leading-5 text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out';
@endphp

<div {{ $attributes->merge(['class' => $classes]) }}>
    <div class="hidden sm:flex sm:items-center">
        <x-dropdown align="-left-6" width="48">
            <x-slot name="trigger">
                <button class="flex items-center text-sm font-medium text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out">
                    <div>{{ __('Блог') }}</div>
                </button>
            </x-slot>

            <x-slot name="content">
                <x-dropdown-link :href="route('admin.categories')">
                    {{ __('Категории') }}
                </x-dropdown-link>
                <x-dropdown-link :href="route('admin.materials')">
                    {{ __('Материалы') }}
                </x-dropdown-link>
            </x-slot>
        </x-dropdown>
    </div>
</div>

