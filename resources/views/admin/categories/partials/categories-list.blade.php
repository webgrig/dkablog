@forelse($categories as $category)
    <tr>
        <td class="pb-3 pt-3">{!! $delimiter !!} {{$category->title}}</td>
        <td class="pb-3 pt-3 text-center">{{$category->published}}</td>
        <td class="pb-3 pt-3 text-right">
            @if(!count($category->children))
                <form action="{{route('admin.category.destroy', $category)}}" onsubmit="if(confirm('Удалить')){ return true} else {return false}" method="post">
                    <input type="hidden" name="_method" value="DELETE">
                    @csrf
                    <x-inputs-button type="icon-link-edit" color="blue" opacity="400" :href="route('admin.category.edit', [$category])" />
                    <x-inputs-button type="icon-link-delete" color="blue" opacity="400" />
                </form>
            @else
                <x-inputs-button type="icon-link-edit" color="blue" opacity="400" :href="route('admin.category.edit', [$category])" />
                <x-inputs-button deleteOff="true" type="icon-link-delete" color="blue" opacity="400" />
            @endif
        </td>
    </tr>
    @if(count($category->children) > 0)
        @include('admin.categories.partials.categories-list', [
            'categories' => $category->children,
            'delimiter' => ' - ' . $delimiter,
        ])
    @endif
@empty
    <tr>
        <td colspan="3" class="pb-6 pt-6 text-center"><h2 class="text-5xl">Данные отсутствуют</h2></td>
    </tr>
@endforelse

