@extends('admin.layouts.app-admin')
@section('content')
    @component('admin.components.breadcrumb')
        @slot('title') Редактирование новости @endslot
        @slot('parent') Главная @endslot
        @slot('level2') <a href="{{route('admin.article.index')}}">Новости</a> @endslot
        @slot('active') {{$article->title}} @endslot
        @slot('separator') / @endslot
    @endcomponent
    <div class="max-w-7xl mx-auto pb-6 px-4 sm:px-6 lg:px-8">
        <div>
            <form action="{{route('admin.article.update', $article)}}" method="post">
                @csrf
                <input type="hidden" name="_method" value="put">

                {{-- Form include --}}
                @include('admin.articles.partials.form')
                <input type="hidden" name="modified_by" value="{{Auth::id()}}">
            </form>
        </div>
    </div>
@endsection


