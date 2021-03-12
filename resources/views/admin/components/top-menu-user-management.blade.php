{{--@props(['href', 'active'])--}}

@php
$classes = ($active ?? false)
            ? 'inline-flex items-center px-1 border-b-2 border-indigo-400 text-sm font-medium leading-5 text-gray-900 focus:outline-none focus:border-indigo-700 transition duration-150 ease-in-out'
            : 'inline-flex items-center px-1 border-b-2 border-transparent border-white text-sm font-medium leading-5 text-gray-500 hover:text-gray-700 hover:border-indigo-300 focus:outline-none focus:text-gray-700 focus:border-indigo-300 transition duration-150 ease-in-out';
@endphp

<div {{ $attributes->merge(['class' => $classes]) }}>
    <div class="sm:flex sm:items-center">
        <x-dropdown align="-left-6" width="48">
            <x-slot name="trigger">
                <button class="flex items-center text-sm font-medium text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:border-gray-300 focus:outline-none focus:text-gray-700 transition duration-150 ease-in-out">
                    <div>{{ __('Права') }}</div>
                </button>
            </x-slot>

            <x-slot name="content">
                <x-dropdown-links :href="route('admin.user_management.user.index')">
                    {{ __('Пользователи') }}
                </x-dropdown-links>
            </x-slot>
        </x-dropdown>
    </div>
</div>

