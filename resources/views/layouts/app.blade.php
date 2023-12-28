<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('partials.admin.head')
</head>

<body>
    @include('partials.admin.nav')
    @include('partials.admin.sidebar')
    <main class="content">
        @include('partials.admin.nav-top')
        {{ $slot }}
        @include('partials.admin.theme')
        @include('partials.admin.setting')
        @include('partials.admin.footer')
    </main>
    @include('partials.admin.js')
</body>

</html>
