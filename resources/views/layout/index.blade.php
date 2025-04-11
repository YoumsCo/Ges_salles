<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('font-awesome-4.7.0/css/font-awesome.min.css') }}">
    @yield('css_js_file')
    @yield('icon')
    <title>{{ config('app.name') }} /@yield('title')</title>
</head>
    @yield('body')
</html>
