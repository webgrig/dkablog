@foreach($categories as $category_list)
    @if(!@empty($category))
        <option value="{{$category_list->id}}" @if($category->parent_id == $category_list->id) selected="" @endif>
            {!! $delimiter !!} {{$category_list->title}}
        </option>
    @else
        <option value="{{$category_list->id}}">
            {!! $delimiter !!} {{$category_list->title}}
        </option>
    @endif

    @if(count($category_list->children) > 0)
        @include('admin.categories.partials.categories-select', [
            'categories' => $category_list->children,
            'delimiter' => ' - ' . $delimiter,
        ])
    @endif
@endforeach
