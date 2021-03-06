@extends('admin.layouts.app-admin')

@section('content')
    @component('admin.components.breadcrumb')
        @slot('title') Список новостей @endslot
        @slot('parent') Главная @endslot
        @slot('active') Новости @endslot
        @slot('separator') / @endslot
    @endcomponent
    <div class="max-w-7xl mx-auto pb-6 px-4 sm:px-6 lg:px-8">
        <div class="text-right">
            <x-inputs-button text="Создать новость" color="blue" opacity="400" type="link" :href="route('admin.article.create')"/>
        </div>
        <table class="md:container md:max-w-full border-collapse table-fixed">
            <thead class="border-b-2">
            <th class="pb-3 w-1/4 text-left">Наименование</th>
            <th class="pb-3 w-1/4">Категория</th>
            <th class="pb-3 w-1/4">Статус</th>
            <th class="pb-3 w-1/4 text-right">Действие</th>
            </thead>
            <tbody>
            @include('admin.articles.partials.news-list', ['articles' => $articles])
            </tbody>
            <tfoot>
            <tr>
                <td colspan="4">
                    <ul class="pagination">
                        {{ $articles->links() }}
                    </ul>
                </td>
            </tr>
            </tfoot>
        </table>
    </div>
@endsection
