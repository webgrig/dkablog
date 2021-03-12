@extends('layouts.app')
@php $title = is_null($category) ? "" : $category->title; @endphp
@section('title', $title . " DKA-DEVELOPER")
@section('content')
    <div>
{{--        @php if (isset($articles_without_category)) $articles = $articles_without_category; @endphp--}}
        @forelse($articles as $article)
            <div class="row">
                <diw class="grid-width-50">
                    <h2><a href="{{route('article', $article->slug)}}">{{$article->title}}</a></h2>
                    <p>{!! $article->description_short !!}</p>
                </diw>
            </div>
        @empty
            <h2>Пусто</h2>
        @endforelse
        {{$articles->links()}}
    </div>
@endsection
