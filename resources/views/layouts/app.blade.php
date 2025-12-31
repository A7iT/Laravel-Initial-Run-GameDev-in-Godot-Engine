<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Laravel Initial Run')</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>
<body>

    @include('partials.header')

    <main>
        @yield('content')
    </main>

    @include('partials.footer')
<script src="{{ asset('js/app.js') }}"></script>

</body>
</html>
