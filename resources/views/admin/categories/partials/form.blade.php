<label for="published" class="inline-block my-2">Статус</label>
<select name="published" id="published" class="block w-full">
    @if (isset($category->id))
        <option value="0" @if($category->published == 0) selected="" @endif>Не опубликовано</option>
        <option value="1" @if($category->published == 1) selected="" @endif>Опубликовано</option>
    @else
        <option value="0">Не опубликовано</option>
        <option value="1">Опубликовано</option>
    @endif
</select>

<label for="name" class="inline-block my-2">Наименование</label>
<input type="text" name="title" id="name" class="block w-full" placeholder="Заголовок категории" value="@if(!empty($category)){{$category->title}}@endif" required>
<label for="slug" class="inline-block my-2">Slug</label>
<input type="text" name="slug" id="slug" class="block w-full bg-red-50" placeholder="Автоматическая генерация" value="@if(!empty($category)){{$category->slug}}@endif" readonly="">
<label for="parent_id" class="inline-block my-2">Родительская категория</label>
<select name="parent_id" id="parent_id" class="block w-full">
    <option value="">-- Без родительской категории --</option>

    @include('admin.categories.partials.categories-select', ['categories' => $categories])
</select>
<hr>
@component('admin.components.inputs.button')
    @slot('text') Сохранить @endslot
    @slot('color') blue @endslot
    @slot('href') {@route('admin.category.create')} @endslot
    @slot('opacity') 400 @endslot
    @slot('type') submit @endslot
@endcomponent
