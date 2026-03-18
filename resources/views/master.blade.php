<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    @yield('icon')

    @stack('template-styles')
    @stack('vendor-styles')
    @stack('page-styles')
</head>
<body>
    @yield('content')

    @stack('template-scripts')
    @stack('vendor-scripts')
    @stack('page-scripts')
</body>
</html>