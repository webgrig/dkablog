@extends('admin.layouts.app-admin')
@section('content')
    @component('admin.components.breadcrumb')
        @slot('title') Создание категории @endslot
        @slot('parent') Главная @endslot
        @slot('level2') <a href="{{route('admin.category.index')}}">Категории</a> @endslot
        @slot('active') Новая категория @endslot
        @slot('separator') / @endslot
    @endcomponent
    <div class="max-w-7xl mx-auto pb-6 px-4 sm:px-6 lg:px-8">
        <div>
            <form action="{{route('admin.category.store')}}" method="post">
                @csrf
                {{-- Form include --}}
                @include('admin.categories.partials.form')
            </form>
        </div>
    </div>
@endsection


