<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <title>{{ $title ?? 'Page Title' }}</title>
    @include('partials.admin.head')
</head>

<body>
    <main>
        {{ $slot }}
    </main>
    @include('partials.admin.js')
</body>

</html>
