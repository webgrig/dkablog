<label for="published" class="inline-block my-2">Статус</label>
<select name="published" id="published" class="block w-full">
    @if (isset($article->id))
        <option value="0" @if($article->published == 0) selected="" @endif>Не опубликовано</option>
        <option value="1" @if($article->published == 1) selected="" @endif>Опубликовано</option>
    @else
        <option value="0">Не опубликовано</option>
        <option value="1">Опубликовано</option>
    @endif
</select>

<label for="title" class="inline-block my-2">Заголовок</label>
<input type="text" name="title" id="title" class="block w-full" placeholder="Заголовок новости" value="@if(!empty($article)){{$article->title}}@endif" required>
<label for="slug" class="inline-block my-2">Slug (Уникальное значение)</label>
<input type="text" name="slug" id="slug" class="block w-full bg-red-50" placeholder="Автоматическая генерация" value="@if(!empty($article)){{$article->slug}}@endif" readonly="">
<label for="categories" class="inline-block my-2">Родительская категория</label>
<select name="categories[]" id="categories" class="block w-full"  multiple="">
    @include('admin.articles.partials.categories-select', ['categories' => $categories])
</select>

<label class="inline-block my-2" for="description_short">Краткое описание</label>
<textarea name="description_short" id="description_short" class="block w-full" required>@if(!empty($article)){{$article->description_short}}@endif</textarea>

<label class="inline-block my-2" for="description">Полное описание</label>
<textarea name="description" id="description" class="block w-full" required>@if(!empty($article)){{$article->description}}@endif</textarea>

<label for="meta_title" class="inline-block my-2">Мета заголовок</label>
<input type="text" name="meta_title" id="meta_title" class="block w-full" placeholder="Мета заголовок" value="@if(!empty($article)){{$article->meta_title}}@endif">

<label for="meta_description" class="inline-block my-2">Мета описание</label>
<input type="text" name="meta_description" id="meta_description" class="block w-full" placeholder="Мета описание" value="@if(!empty($article)){{$article->meta_description}}@endif">



<label for="meta_keyword" class="inline-block my-2">Ключевые слова</label>
<input type="text" name="meta_keyword" id="meta_keyword" class="block w-full" placeholder="Ключевые слова, через запятую" value="@if(!empty($article)){{$article->meta_keyword}}@endif">
<hr>
@component('admin.components.inputs.button')
    @slot('text') Сохранить @endslot
    @slot('color') blue @endslot
    @slot('href') {@route('admin.category.create')} @endslot
    @slot('opacity') 400 @endslot
    @slot('type') submit @endslot
@endcomponent
