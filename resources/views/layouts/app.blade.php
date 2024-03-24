<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>@yield('title')</title>
        <meta name="description" itemprop="description" content="@yield('description')">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/fontawesome.min.css"">
        @vite(['resources/css/app.css', 'resources/scss/app.scss', 'resources/js/app.js'])
    </head>

    <body>

        @include('commons.navbar')

        <div class="l-content l-section l-bottom-xlarge">
            @yield('content')
        </div>
        
        @include('commons.footer')
        
    </body>
</html>