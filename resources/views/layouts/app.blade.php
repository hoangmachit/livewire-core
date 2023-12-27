<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <title>{{ $title ?? 'Page Title' }}</title>
    @include('partials.head')
</head>

<body>
    @include('partials.nav')
    @include('partials.sidebar')
    <main class="content">
        @include('partials.nav-top')
    {{ $slot }}
    @include('partials.theme')
    @include('partials.setting')
    @include('partials.footer')
    </main>
    @include('partials.js')
</body>

</html>
