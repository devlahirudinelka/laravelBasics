<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel Layout</title>

    @include('libraries.styles')

</head>

<body>
    @include('components.nav')
    {{-- //any name --}}
    @yield('content')
    @include('components.footer')
    @include('libraries.scripts')
</body>

</html>
