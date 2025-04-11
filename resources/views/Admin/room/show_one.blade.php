@extends('layout.index')
@section('css_js_file')
    @vite(['resources/css/dark_css/room.css'])
@endsection
@section('icon')
    <link rel="icon" href="{{ asset('/icons/003-home3.ico') }}">
@endsection
@section('title')
    @foreach($datas as $data)
        Salle : {{ $data->intitule }}
    @endforeach
@endsection

@section('body')
    <body class="relative transition-all duration-500 ease-in-out flex flex-col justify-center items-center w-screen h-screen bg-black overflow-x-hidden text-white">

        @include('loader.loader')

        <div id="container" class="flex justify-center items-center transition-all duration-500 ease-in-out w-11/12 h-4/5 relative border-2 border-white shadow-md shadow-white">

            @forelse ($datas as $room)
                <div id="container-image" class="transition-all duration-300 ease-in-out relative w-1/2 h-full ">
                    <img src="{{ $room->image }}" alt="Image" class="transition-all duration-300 ease-in-out w-full h-full">
                    {{-- <img src="{{ asset('img/pexels-eberhard-grossgasteiger-1421903.jpg') }}" alt="Image" class="transition-all duration-300 ease-in-out w-full h-full"> --}}
                </div>

                <div id="container-description" class="transition-all duration-300 ease-in-out relative w-1/2 h-full flex flex-col justify-center items-center">
                    <p class="transition-all duration-300 ease-in-out text-white text-xl w-full h-3/4 overflow-auto text-justify p-5 pt-2">
                        {{ $data->description }}
                    </p>
                    <div id="container-link-button" class="transition-all duration-300 ease-in-out w-full h-1/4 flex justify-around items-center gap-3">
                        <div id="container-link" class="transition-all duration-300 ease-in-out w-1/3 h-full flex flex-col justify-center items-center overflow-auto">
                            <span class="transition-all duration-300 ease-in-out text-xl flex flex-wrap justify-center items-center w-full h-1/2 hover:text-emerald-400">Nom: {{ $data->intitule }}</span>
                            <a href="#" class="fa fa-map-marker
                            transition-all duration-300 ease-in-out text-xl underline hover:text-emerald-400 font-semibold text-center flex flex-wrap justify-center items-center w-full h-1/2">
                                {{ $data->localisation }}
                            </a>
                        </div>
                        <span class="transition-all duration-500 ease-in-out w-52 h-14 text-xl font-extrabold">Prix : {{ $data->prix }}</span>
                    </div>
                </div>
            @empty
                <span class="text-white text-center text-3xl animate-bounce">Aucun resultat</span>
            @endforelse
        </div>
    </body>
@endsection
