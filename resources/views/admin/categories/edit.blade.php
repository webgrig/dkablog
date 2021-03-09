@extends('admin.layouts.app-admin')
@section('content')
    @component('admin.components.breadcrumb')
        @slot('title') Редактирование категории @endslot
        @slot('parent') Главная @endslot
        @slot('active') Категории @endslot
        @slot('separator') / @endslot
    @endcomponent
    <div class="max-w-7xl mx-auto pb-6 px-4 sm:px-6 lg:px-8">
        <div>
            <form action="{{route('admin.category.update', $category)}}" method="post">
                <input type="hidden" name="_method" value="put">
                @csrf
                {{-- Form include --}}
                @include('admin.categories.partials.form')
            </form>
        </div>
    </div>
@endsection


