@extends('admin.layouts.app-admin')

@section('content')
    @component('admin.components.breadcrumb')
        @slot('title') Список категорий @endslot
        @slot('parent') Главная @endslot
        @slot('active') Категории @endslot
        @slot('separator') / @endslot
    @endcomponent
    <div class="max-w-7xl mx-auto pb-6 px-4 sm:px-6 lg:px-8">
        <div class="text-right">
            <x-inputs-button text="Создать категорию" color="blue" opacity="400" type="link" :href="route('admin.category.create')"/>
        </div>
        <table class="md:container md:max-w-full border-collapse table-fixed">
            <thead class="border-b-2">
            <th class="pb-3 w-1/3 text-left">Наименование</th>
            <th class="pb-3 w-1/3">Статус</th>
            <th class="pb-3 w-1/3 text-right">Действие</th>
            </thead>
            <tbody>
            @include('admin.categories.partials.categories-list', ['categories' => $categories])
            </tbody>
            <tfoot>
            <tr>
                <td colspan="3">
                    <ul class="pagination">
                        {{ $categories->links() }}
                    </ul>
                </td>
            </tr>
            </tfoot>
        </table>
    </div>
@endsection
