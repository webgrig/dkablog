@extends('admin.layouts.app-admin')

@section('content')
    @component('admin.components.breadcrumb')
        @slot('title') Список пользователей @endslot
        @slot('parent') Главная @endslot
        @slot('active') Пользователи @endslot
        @slot('separator') / @endslot
    @endcomponent
    <div class="max-w-7xl mx-auto pb-6 px-4 sm:px-6 lg:px-8">
        <div class="text-right">
            <x-inputs-button text="Создать пользователя" color="blue" opacity="400" type="link" :href="route('admin.user_management.user.create')"/>
        </div>
        <table class="md:container md:max-w-full border-collapse table-fixed">
            <thead class="border-b-2">
            <th class="pb-3 w-1/3 text-left">Имя</th>
            <th class="pb-3 w-1/3 text-center">Email</th>
            <th class="pb-3 w-1/3 text-right">Действие</th>
            </thead>
            <tbody>
            @include('admin.user_management.users.partials.users-list', ['users' => $users])
            </tbody>
            <tfoot>
            <tr>
                <td colspan="3">
                    <ul class="pagination">
                        {{ $users->links() }}
                    </ul>
                </td>
            </tr>
            </tfoot>
        </table>
    </div>
@endsection
