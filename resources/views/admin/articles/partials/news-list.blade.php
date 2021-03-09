@forelse($articles as $article)
    <tr>
        <td class="pb-3 pt-3">{!! $delimiter !!} {{$article->title}}</td>
        <td class="pb-3 pt-3 text-center">{{$article->published}}</td>
        <td class="pb-3 pt-3 text-right">
            <form action="{{route('admin.article.destroy', $article)}}" onsubmit="if(confirm('Удалить')){ return true} else {return false}" method="post">
                <input type="hidden" name="_method" value="DELETE">
                @csrf
                <x-inputs-button type="icon-link-edit" color="blue" opacity="400" :href="route('admin.article.edit', [$article])" />
                <x-inputs-button type="icon-link-delete" color="blue" opacity="400" />
            </form>
        </td>
    </tr>
@empty
    <tr>
        <td colspan="3" class="pb-6 pt-6 text-center"><h2 class="text-5xl">Статьи отсутствуют</h2></td>
    </tr>
@endforelse

