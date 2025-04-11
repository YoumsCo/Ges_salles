@extends('layout.index')
@section('css_js_file')
    @vite(['resources/css/dark_css/style.css', 'resources/js/script.js'])
@endsection
@section('icon')
    <link rel="icon" href="{{ asset('/icons/114-user.ico') }}">
@endsection
@section('title')
    Email de reservation
@endsection

@section('body')
    <body class="transition-all duration-500 ease-in-out flex justify-center items-center flex-col w-screen h-screen text-white">
        <h1 class="transition-all duration-500 ease-in-out  text-2xl">{{ $subject }}</h1>
        <p class="transition-all duration-500 ease-in-out  text-xl">
            {{ $body }}
        </p>
    </body>
@endsection
