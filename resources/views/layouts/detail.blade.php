<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    @stack('prepend-styles')
    @include('includes.styles')
    @stack('addon-styles')

</head>
<body>
    @include('includes.navbar-alternate')

    @yield('content')

    @include('includes.footer')

    @stack('prepend-scripts')
    @include('includes.scripts')
    @stack('addon-scripts')

</body>
</html>