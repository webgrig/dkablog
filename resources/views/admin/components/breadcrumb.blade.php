<!-- Page Heading -->
<header>
    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight pb-3.5">{{ $title }}</h2>
        @if(!Route::is('admin.index'))
            <ul class="p-4 space-x-1 bg-red-50 rounded-md">
                @if(isset($parent))
                    <li class="inline text-blue-500 hover:text-blue-700"><a
                            href="{{route('admin.index')}}">{{$parent}}</a>
                    </li>
                    <li class="inline">{{$separator}}</li>
                @endif
                @if(isset($level2))
                    <li class="inline text-blue-500 hover:text-blue-700">{{$level2}}</li>
                    <li class="inline">{{$separator}}</li>
                @endif
                @if(isset($level3))
                    <li class="inline text-blue-500 hover:text-blue-700">{{$level3}}</li>
                    <li class="inline">{{$separator}}</li>
                @endif
                @if(isset($level4))
                    <li class="inline text-blue-500 hover:text-blue-700">{{$level4}}</li>
                    <li class="inline">{{$separator}}</li>
                @endif
                @if(isset($level5))
                    <li class="inline text-blue-500 hover:text-blue-700">{{$level5}}</li>
                    <li class="inline">{{$separator}}</li>
                @endif
                @if(isset($active))
                    <li class="inline">{{$active}}</li>
                @endif
            </ul>
        @endif
    </div>
</header>
