@extends('layout.index')
@section('css_js_file')
    @vite(['resources/css/dark_css/Admin/user/show_one.css'])
@endsection
@section('icon')
    <link rel="icon" href="{{ asset('/icons/003-home3.ico') }}">
@endsection
@section('title')
    @foreach ($datas as $data)
        Utlisateur : {{ $data->nom }}
    @endforeach
@endsection
@section('body')
    <body class="transition-all duration-500 ease-in-out flex flex-col justify-center items-center w-screen h-screen bg-black">
        @include('loader.loader')

        <div id="container" class="relative flex flex-col justify-center items-left         border-2 border-white w-88 gap-3 text-xl p-5 rounded-xl">
            @forelse ($datas as $value)
                <div id="img" class="transition duration-100 ease-in-out relative flex justify-center items-center w-full animate-pulse">
                    <img src="{{ asset('storage/'.$image) }}" alt="img" class="rounded-full abolsute w-60 h-60">
                </div>
                <span class="text-lime-100">Nom : <i class="text-emerald-500">{{ $value->nom }}</i></span>
                <span class="text-lime-100">Email : <i class="text-emerald-500">{{ $value->email }}</i></span>
                <span class="text-lime-100">Mot de passe : <i class="text-emerald-500">*******************</i></span>
                @empty
                    <div id="img" class="transition duration-100 ease-in-out relative flex justify-center items-center w-full animate-pulse">
                        <img src="#" alt="Empty" class="rounded-full abolsute w-60 h-60">
                    </div>
                    <span class="text-lime-100">Nom : <i class="text-emerald-500">Null</i></span>
                    <span class="text-lime-100">Email : <i class="text-emerald-500">Null</i></span>
                    <span class="text-lime-100">Mot de passe : <i class="text-emerald-500">Null</i></span>
            @endforelse
        </div>
    </body>
@endsection
