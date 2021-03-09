@extends('admin.layouts.app-admin')

@section('content')
    @component('admin.components.breadcrumb')
        @slot('title') Главная @endslot
    @endcomponent
    <div class="py-12 pb-6 px-4 grid grid-cols-1 gap-6 sm:grid-cols-2 md:grid-cols-4 max-w-7xl sm:px-6 lg:px-8">
        <div
            class="border border-gray-300 h-40 bg-white rounded-md flex items-center justify-center bg-gradient-to-tr from-gray-50 to-gray-100 p-2.5">
            <div
                class="h-12 p-2.5 rounded-md text-white flex-none bg-green-500 items-center justify-center text-2xl font-semibold">
                Категорий {{$count_categories}}
            </div>
        </div>
        <div
            class="border border-gray-300 h-40 bg-white rounded-md flex items-center justify-center bg-gradient-to-tr from-gray-50 to-gray-100 p-2.5">
            <div
                class="h-12 p-2.5 rounded-md text-white flex-none bg-green-500 items-center justify-center text-2xl font-semibold">
                Материалов {{$count_articles}}
            </div>
        </div>
        <div
            class="border border-gray-300 h-40 bg-white rounded-md flex items-center justify-center bg-gradient-to-tr from-gray-50 to-gray-100 p-2.5">
            <div
                class="h-12 p-2.5 rounded-md text-white flex-none bg-green-500 items-center justify-center text-2xl font-semibold">
                Посетителей 0
            </div>
        </div>
        <div
            class="border border-gray-300 h-40 bg-white rounded-md flex items-center justify-center bg-gradient-to-tr from-gray-50 to-gray-100 p-2.5">
            <div
                class="h-12 p-2.5 rounded-md text-white flex-none bg-green-500 items-center justify-center text-2xl font-semibold">
                Сегодня 0
            </div>
        </div>
    </div>
    <div class="pb-12 px-4 grid grid-cols-1 gap-6 sm:grid-cols-2 max-w-7xl sm:px-6 lg:px-8">
        <div>
            <a href="{{route('admin.category.create')}}#"
               class="shadow-md bg-white rounded-md flex items-center justify-center bg-gradient-to-tr from-gray-50 to-gray-100 p-2.5 mb-2.5">
                Создать категорию
            </a>
            @foreach($categories as $category)
                <div
                    class="shadow-md bg-white rounded-md flex bg-gradient-to-tr from-gray-50 to-gray-100 p-2.5 mb-2.5">
                    <a href="{{route('admin.category.edit', $category)}}">
                        <h4 class="text-2xl font-semibo">{{$category->title}}</h4>
                        <p>{{$category->articles()->count()}}</p>
                    </a>
                </div>
            @endforeach
        </div>
        <div>
            <a href="{{route('admin.article.create')}}"
               class="shadow-md bg-white rounded-md flex items-center justify-center bg-gradient-to-tr from-gray-50 to-gray-100 p-2.5 mb-2.5">
                Создать материал
            </a>

            @foreach($articles as $article)
                <div
                    class="shadow-md bg-white rounded-md flex bg-gradient-to-tr from-gray-50 to-gray-100 p-2.5 mb-2.5">
                    <a href="{{route('admin.article.edit', $article)}}">
                        <h4 class="text-2xl font-semibo">{{$article->title}}</h4>
                        <p>{{$article->categories()->pluck('title')->implode(', ')}}</p>
                    </a>
                </div>
            @endforeach
        </div>
    </div>

@endsection
