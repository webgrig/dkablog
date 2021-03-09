@extends('admin.layouts.app-admin')
@section('content')
    @component('admin.components.breadcrumb')
        @slot('title') Создание новости @endslot
        @slot('parent') Главная @endslot
        @slot('active') Новости @endslot
        @slot('separator') / @endslot
    @endcomponent
    <div class="max-w-7xl mx-auto pb-6 px-4 sm:px-6 lg:px-8">
        <div>
            <form action="{{route('admin.article.store')}}" method="post">
                @csrf
                {{-- Form include --}}
                @include('admin.articles.partials.form')
                <input type="hidden" name="created_by" value="{{Auth::id()}}">
            </form>
        </div>
    </div>
@endsection


