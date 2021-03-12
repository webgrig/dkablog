@foreach($categories as $category)
    @if($category->children->where('published', 1)->count())
        <li class="nav-item nav-item dropdown @if(!$category->parent_id) h-16 @endif" style="border: 1px #000 solid;">
            <a href="{{url("/category/$category->slug")}}"
               class="nav-link dropdown-toggle inline-block @if(!$category->parent_id) min-h-full @endif flex items-center justify-center px-2"
               data-toggle="dropdown"><span>{{ $category->title }}</span></a>
            <ul class="submenu dropdown" style="display: none">
                @include('layouts.top-menu', [
                                'categories' => $category->children,
                            ])
            </ul>
        </li>
    @else
        <li class="nav-item @if(!$category->parent_id) h-16 @endif" style="border: 1px #000 solid;">
            <a href="{{url("/category/$category->slug")}}"
               class="inline-block @if(!$category->parent_id) min-h-full @endif flex items-center justify-center px-2"><span>{{ $category->title }}</span></a>
        </li>
    @endif
@endforeach


<script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script>
    window.onload = function () {
        $(function () {
            $(document).on('click', 'body', function (e) {
                $('.dropdown-menu .submenu').hide();
                e.stopPropagation();
            });

            // make it as accordion for smaller screens
            $('.dropdown-menu a').mouseover(function (e) {
                e.preventDefault();
                if ($(this).next('.submenu').length) {
                    $(this).next('.submenu').toggle();
                }
                $('.dropdown').on('hide.bs.dropdown', function () {
                    $(this).find('.submenu').hide();
                })
            });
        });
    };
</script>
