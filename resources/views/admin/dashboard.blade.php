<x-app-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12 pb-6 px-4 grid grid-cols-1 gap-6 sm:grid-cols-2 md:grid-cols-4 max-w-7xl sm:px-6 lg:px-8">
        <div class="border border-gray-300 h-40 bg-white rounded-md flex items-center justify-center bg-gradient-to-tr from-gray-50 to-gray-100 p-2.5">
            <div class="h-12 p-2.5 rounded-md text-white flex-none bg-green-500 items-center justify-center text-2xl font-semibold">Категорий 0</div>
        </div>
        <div class="border border-gray-300 h-40 bg-white rounded-md flex items-center justify-center bg-gradient-to-tr from-gray-50 to-gray-100 p-2.5">
            <div class="h-12 p-2.5 rounded-md text-white flex-none bg-green-500 items-center justify-center text-2xl font-semibold">Материалов 0</div>
        </div>
        <div class="border border-gray-300 h-40 bg-white rounded-md flex items-center justify-center bg-gradient-to-tr from-gray-50 to-gray-100 p-2.5">
            <div class="h-12 p-2.5 rounded-md text-white flex-none bg-green-500 items-center justify-center text-2xl font-semibold">Посетителей 0</div>
        </div>
        <div class="h-40 bg-white rounded-md flex items-center justify-center bg-gradient-to-tr from-gray-50 to-gray-100 p-2.5">
            <div class="h-12 p-2.5 rounded-md text-white flex-none bg-green-500 items-center justify-center text-2xl font-semibold">Сегодня 0</div>
        </div>
    </div>
    <div class="pb-12 px-4 grid grid-cols-1 gap-6 sm:grid-cols-2 max-w-7xl sm:px-6 lg:px-8">
        <div>
            <a href="#" class="shadow-md bg-white rounded-md flex items-center justify-center bg-gradient-to-tr from-gray-50 to-gray-100 p-2.5 mb-2.5">
                Создать категорию
            </a>
            <div class="border border-gray-300 bg-white rounded-md bg-gradient-to-tr from-gray-50 to-gray-100 p-2.5">
                <h4 class="text-2xl font-semibo">Категория первая</h4>
                <p>Кол-во материалов</p>
            </div>
        </div>
        <div>
            <a href="#" class="shadow-md bg-white rounded-md flex items-center justify-center bg-gradient-to-tr from-gray-50 to-gray-100 p-2.5 mb-2.5">
                Создать материал
            </a>
            <div class="border border-gray-300 bg-white rounded-md bg-gradient-to-tr from-gray-50 to-gray-100 p-2.5">
                <h4 class="text-2xl font-semibo">Материал первый</h4>
                <p>Категория</p>
            </div>
        </div>
    </div>
</x-app-admin-layout>
