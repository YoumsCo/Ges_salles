@extends('layout.index')
@section('css_js_file')
    @vite(['resources/css/dark_css/historique.css', 'resources/js/historique.js'])
@endsection
@section('icon')
    <link rel="icon" href="{{ asset('/icons/269-info.ico') }}">
@endsection
@section('title')
    Historique de : {{ Auth::user()->nom }}
@endsection

@section('body')
    <body class="transition-all duration-500 ease-in-out flex flex-col justify-center items-center w-screen h-screen bg-black text-white">
        @if(session('message'))
            <div id="session">
                <span>{{ session('message') }}</span>
                <i class="relative text-xl fa fa-close -right-80"></i>
            </div>
        @endif

        @include('loader.loader')
        <div id="container" class="transition-all duration-500 ease-in-out relative flex flex-col justify-start items-start gap-3 w-screen h-screen mt-5 overflow-auto">

            <h1 class="transition-all duration-500 ease-in-out w-full text-3xl text-center italic font-extrabold">Historique</h1>

            <table class="transition-all duration-500 ease-in-out w-full text-center border-2 border-white text-lg overflow-auto">
                <tr>
                    <th class="transition-all duration-500 ease-in-out border-2 border-white">Intitule</th>
                    <th class="transition-all duration-500 ease-in-out border-2 border-white">Localisation</th>
                    <th class="transition-all duration-500 ease-in-out border-2 border-white">Dimensions</th>
                    <th class="transition-all duration-500 ease-in-out border-2 border-white">Prix</th>
                    <th class="transition-all duration-500 ease-in-out border-2 border-white">Durée</th>
                    <th class="transition-all duration-500 ease-in-out border-2 border-white">Date</th>
                </tr>
                @foreach ($datas as $value)
                    <tr>
                        <td class="transition-all duration-500 ease-in-out border-2 border-white">{{ $value->intitule }}</td>
                        <td class="transition-all duration-500 ease-in-out border-2 border-white underline"><a href="#">{{ $value->localisation }}</a></td>
                        <td class="transition-all duration-500 ease-in-out border-2 border-white">{{ $value->dimensions }}</td>
                        <td class="transition-all duration-500 ease-in-out border-2 border-white">{{ $value->prix }}</td>
                        <td class="transition-all duration-500 ease-in-out border-2 border-white">{{ $value->duree }}</td>
                        <td class="transition-all duration-500 ease-in-out border-2 border-white">{{ $value->date }}</td>
                    </tr>
                @endforeach
            </table>
        </div>
    </body>
@endsection
