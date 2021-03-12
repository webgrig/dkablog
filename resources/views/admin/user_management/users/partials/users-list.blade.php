@forelse($users as $user)
    <tr>
        <td class="pb-3 pt-3">{{$user->name}}</td>
        <td class="pb-3 pt-3 text-center">{{$user->email}}</td>
        <td class="pb-3 pt-3 text-right">
            <form action="{{route('admin.user_management.user.destroy', $user)}}" onsubmit="if(confirm('Удалить')){ return true} else {return false}" method="post">
                @method('DELETE')
                @csrf
                <x-inputs-button type="icon-link-edit" color="blue" opacity="400" :href="route('admin.user_management.user.edit', [$user])" />
                <x-inputs-button type="icon-link-delete" color="blue" opacity="400" />
            </form>
        </td>
    </tr>
@empty
    <tr>
        <td colspan="3" class="pb-6 pt-6 text-center"><h2 class="text-5xl">Пользователи отсутствуют</h2></td>
    </tr>
@endforelse

