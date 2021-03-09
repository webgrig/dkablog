<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>
    <body class="font-sans antialiased text-gray-800">
        <div class="min-h-screen">
            @include('admin.layouts.header')

            <!-- Page Content -->
            <main class="bg-gradient-to-b from-indigo-50">
                @yield('content')
            </main>
        </div>
        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>

        @if(Route::is(['admin.article.edit', 'admin.article.create']))
            <script src="https://cdn.ckeditor.com/4.13.0/standard/ckeditor.js"></script>
            <script>
                CKEDITOR.replace('description_short', {
                    height: 260,
                    /* Default CKEditor 4 styles are included as well to avoid copying default styles. */
                    contentsCss: [
                        'http://cdn.ckeditor.com/4.16.0/full-all/contents.css',
                        'https://ckeditor.com/docs/ckeditor4/4.16.0/examples/assets/css/classic.css'
                    ]
                });
                CKEDITOR.replace('description', {
                    height: 260,
                    /* Default CKEditor 4 styles are included as well to avoid copying default styles. */
                    contentsCss: [
                        'http://cdn.ckeditor.com/4.16.0/full-all/contents.css',
                        'https://ckeditor.com/docs/ckeditor4/4.16.0/examples/assets/css/classic.css'
                    ]
                });
            </script>
        @endif
    </body>
</html>
