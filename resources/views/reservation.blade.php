@extends('layout.index')
@section('css_js_file')
    @vite(['resources/css/dark_css/reservation.css', 'resources/js/reservation.js'])
@endsection
@section('icon')
    <link rel="icon" href="{{ asset('/icons/003-home3.ico') }}">
@endsection
@section('title')
    @foreach ($datas as $data)
        Reservation : {{ $data->intitule }}
    @endforeach
@endsection

@section('body')
    <body class="transition-all duration-500 ease-in-out relative bg-black flex flex-col justify-center items-center w-screen h-screen text-white overflow-hidden">
        @if(session('fail'))
            <div class="absolute top-0 left-0 w-full bg-red-500 text-center">
                <message class="text-black font-extrabold text-xl">{{ session('fail') }}</message>
            </div>
        @endif
        @include('loader.loader')
        @forelse ($datas as $data)
            <form action="{{ route('reservation', ['id' => $data->id]) }}" method="POST" class="transition-all duration-500 ease-in-out w-5/12 flex flex-col justify-center items-center gap-3 rounded-lg">
                @csrf
                <div class="transition-all duration-500 ease-in-out w-full flex flex-col justify-center items-center">
                    <img src="{{ asset('img/pexels-eberhard-grossgasteiger-1421903.jpg') }}" alt="img" class="w-11/12 h-40">
                    <h2 class="text-lg w-full h-1/12 text-center">Reserver : <span>{{ $data->intitule }}</span></h2>
                </div>
                <div class="transition-all duration-500 ease-in-out w-full flex justify-center items-left pl-2 pr-2">
                    <label for="intitule" class="text-xl w-1/5">Intitule : </label>
                    <input type="text" name="intitule" id="intitule" value="{{ $data->intitule }}" class="transition-all duration-500 ease-in-out bg-transparent pl-5 pr-5 text-lg pointer-events-none w-4/5">
                </div>
                <div class="transition-all duration-500 ease-in-out w-full flex justify-center items-left pl-2 pr-2">
                    <label for="localisation" class="text-xl w-2/6">Localisation :</label>
                    <input type="text" name="localisation" id="localisation" value="{{ $data->localisation }}" class="transition-all duration-500 ease-in-out bg-transparent pl-5 pr-5 text-lg pointer-events-none w-4/6">
                </div>
                <div class="transition-all duration-500 ease-in-out w-full flex justify-center items-left pl-2 pr-2">
                    <label for="dimensions" class="text-xl w-2/6">Dimensions :</label>
                    <input type="text" name="dimensions" id="dimensions" value="{{ $data->dimensions }}" class="transition-all duration-500 ease-in-out bg-transparent pl-5 pr-5 text-lg pointer-events-none w-4/6">
                </div>
                <div class="transition-all duration-500 ease-in-out w-full flex justify-center items-left pl-2 pr-2">
                    <label for="prix" class="text-xl w-1/5">Prix : </label>
                    <input type="text" name="prix" id="prix" value="{{ $data->prix }}" class="transition-all duration-500 ease-in-out bg-transparent pl-5 pr-5 text-lg text-emerald-600 pointer-events-none w-4/5">
                </div>
                <div @class([
                    "transition-all duration-500 ease-in-out w-full flex justify-center items-left pl-2 pr-2",
                    "relative mb-5" => $errors->has('duree')
                    ])
                    >
                    <label for="duree" class="text-xl w-1/5">Durée : </label>
                    <input type="text" name="duree" id="duree" placeholder="durée en heure" class="transition-all duration-500 ease-in-out bg-transparent pl-5 pr-5 text-lg w-4/5" value="{{ old('duree') ?? '' }}">
                    @error('duree')
                        <error class="absolute text-red-500 text-md text-justify font-bold translate-y-6 w-full flex flex-wrap justify-center items-center">{{ $message }}</error>
                    @enderror
                </div>
                <div @class([
                    "transition-all duration-500 ease-in-out w-full flex justify-center items-left pl-2 pr-2",
                    "relative mb-5" => $errors->has('date')
                    ])
                >
                    <label for="date" class="text-xl w-1/5">Date :</label>
                    <input type="date" name="date" id="date" class="transition-all duration-500 ease-in-out bg-transparent pl-5 pr-5 text-lg w-4/5" value="{{ old('date') ?? '' }}">
                    @error('date')
                        <error class="absolute text-red-500 text-md text-justify font-bold translate-y-6 w-full flex flex-wrap justify-center items-center">{{ $message }}</error>
                    @enderror
                </div>
                <div class="transition-all duration-500 ease-in-out w-full flex justify-center items-center pb-3">
                    <input type="hidden" name="hidden" value="{{ $data->id }}">
                    <button type="submit" class="transition-all duration-500 ease-in-out relative text-xl font-extrabold w-60 h-12">Valider</button>
                </div>
            </form>
        @empty
            <span>Aucun resultat</span>
        @endforelse
    </body>
@endsection
