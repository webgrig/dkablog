<!-- Validation Errors -->
<x-auth-validation-errors class="mb-4" :errors="$errors" />

<label for="name" class="inline-block my-2">Имя</label>
<input type="text" name="name" id="name" class="block w-full" placeholder="Имя пользователя" value="@if(isset($user->name)){{$user->name}}@else{{old('name')}}@endif" required>

<label for="email" class="inline-block my-2">Email</label>
<input type="email" name="email" id="email" class="block w-full" placeholder="Email" value="@if(isset($user->email)){{$user->email}}@else{{old('email')}}@endif" required>

<label for="password" class="inline-block my-2">Пароль</label>
<input type="password" name="password" id="password" class="block w-full" placeholder="Пароль">

<label for="password_confirmation" class="inline-block my-2">Подтверждение пароля</label>
<input type="password" name="password_confirmation" id="password_confirmation" class="block w-full" placeholder="Подтвердите пароль">


<hr>
@component('admin.components.inputs.button')
    @slot('text') Сохранить @endslot
    @slot('color') blue @endslot
    @slot('href') {@route('admin.category.create')} @endslot
    @slot('opacity') 400 @endslot
    @slot('type') submit @endslot
@endcomponent
