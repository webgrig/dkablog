<!-- Page Heading -->
<header>
    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight pb-3.5">{{ $title }}</h2>
        @if(isset($parent)  && isset($active))
            <ol class="p-4 space-x-1 bg-red-50 rounded-md">
                <li class="inline text-blue-500 hover:text-blue-700"><a href="{{route('admin.index')}}">{{$parent}}</a></li>
                <li class="inline">{{$separator}}</li>
                <li class="inline">{{$active}}</li>
            </ol>
        @endif
    </div>
</header>
