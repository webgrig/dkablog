@extends('admin.layouts.app-admin')
@section('content')
    @component('admin.components.breadcrumb')
        @slot('title') Редактирование пользователя @endslot
        @slot('parent') Главная @endslot
        @slot('level2') <a href="{{route('admin.user_management.user.index')}}">Пользователи</a> @endslot
        @slot('active') {{$user->name}} @endslot
        @slot('separator') / @endslot
    @endcomponent
    <div class="max-w-7xl mx-auto pb-6 px-4 sm:px-6 lg:px-8">
        <div>
            <form action="{{route('admin.user_management.user.update', $user)}}" method="post">
                @method('PUT')
                @csrf
                {{-- Form include --}}
                @include('admin.user_management.users.partials.form')
            </form>
        </div>
    </div>
@endsection


