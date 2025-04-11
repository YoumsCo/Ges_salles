@extends('layout.index')
@section('css_js_file')
    @vite(['resources/css/dark_css/reservation.css', 'resources/js/reservation.js'])
@endsection
@section('icon')
    <link rel="icon" href="{{ asset('/icons/003-home3.ico') }}">
@endsection
@section('title')
    @foreach ($datas as $data)
        Modifier : {{ $data->intitule }}
    @endforeach
@endsection

@section('body')
    <body class="transition-all duration-500 ease-in-out relative bg-black flex flex-col justify-center items-center w-screen h-screen text-white overflow-hidden">
        @include('loader.loader')
        @forelse ($datas as $data)
            <form action="{{ route('admin.room.update', $data->id) }}" method="POST" class="transition-all duration-500 ease-in-out w-5/12 flex flex-col justify-center items-center gap-3 rounded-lg pt-2">
                @csrf
                @method('PUT')
                <div class="transition-all duration-500 ease-in-out w-full flex flex-col justify-center items-center">
                    {{-- <img src="{{ asset('img/pexels-eberhard-grossgasteiger-1421903.jpg') }}" alt="img" class="w-11/12 h-40"> --}}
                    <img src="{{ $data->image }}" alt="img" class="w-11/12 h-40 rounded-xl">
                    <h2 class="text-lg w-full h-1/12 text-center">Modifier : <span>{{ $data->intitule }}</span></h2>
                </div>
                <div @class([
                    "transition-all duration-500 ease-in-out w-full flex justify-center items-left pl-2 pr-2",
                    "relative mb-5" => $errors->has('intitule')
                    ])
                    >
                    <label for="duree" class="text-xl w-1/5">Intitulé : </label>
                    <input type="text" name="intitule" id="duree" placeholder="Entrez l'intitulé" class="transition-all duration-500 ease-in-out bg-transparent pl-5 pr-5 text-lg w-4/5" value="{{ old('intitule') ?? $data->intitule }}">
                    @error('intitule')
                        <error class="absolute text-red-500 text-md text-justify font-bold translate-y-6 w-full flex flex-wrap justify-center items-center">{{ $message }}</error>
                    @enderror
                </div>
                <div @class([
                    "transition-all duration-500 ease-in-out w-full flex justify-center items-left pl-2 pr-2",
                    "relative mb-5" => $errors->has('apercu')
                    ])
                    >
                    <label for="duree" class="text-xl w-2/5">Apercu : </label>
                    <input type="text" name="apercu" id="duree" placeholder="Entrez la apercu" class="transition-all duration-500 ease-in-out bg-transparent pl-5 pr-5 text-lg w-4/5" value="{{ old('apercu') ?? $data->apercu }}">
                    @error('apercu')
                        <error class="absolute text-red-500 text-md text-justify font-bold translate-y-6 w-full flex flex-wrap justify-center items-center">{{ $message }}</error>
                    @enderror
                </div>
                <div @class([
                    "transition-all duration-500 ease-in-out w-full flex justify-center items-left pl-2 pr-2",
                    "relative mb-5" => $errors->has('description')
                    ])
                    >
                    <label for="duree" class="text-xl w-2/5">Description : </label>
                    <input type="text" name="description" id="duree" placeholder="Entrez la description" class="transition-all duration-500 ease-in-out bg-transparent pl-5 pr-5 text-lg w-4/5" value="{{ old('description') ?? $data->description }}">
                    @error('description')
                        <error class="absolute text-red-500 text-md text-justify font-bold translate-y-6 w-full flex flex-wrap justify-center items-center">{{ $message }}</error>
                    @enderror
                </div>
                <div @class([
                    "transition-all duration-500 ease-in-out w-full flex justify-center items-left pl-2 pr-2",
                    "relative mb-5" => $errors->has('localisation')
                    ])
                    >
                    <label for="duree" class="text-xl w-2/5">Localisation : </label>
                    <input type="text" name="localisation" id="duree" placeholder="Entrez la localisation" class="transition-all duration-500 ease-in-out bg-transparent pl-5 pr-5 text-lg w-4/5" value="{{ old('localisation') ?? $data->localisation }}">
                    @error('localisation')
                        <error class="absolute text-red-500 text-md text-justify font-bold translate-y-6 w-full flex flex-wrap justify-center items-center">{{ $message }}</error>
                    @enderror
                </div>
                <div @class([
                    "transition-all duration-500 ease-in-out w-full flex justify-center items-left pl-2 pr-2",
                    "relative mb-5" => $errors->has('dimensions')
                    ])
                    >
                    <label for="duree" class="text-xl w-2/5">Dimensions : </label>
                    <input type="text" name="dimensions" id="duree" placeholder="Entrez la dimensions" class="transition-all duration-500 ease-in-out bg-transparent pl-5 pr-5 text-lg w-4/5" value="{{ old('dimensions') ?? $data->dimensions }}">
                    @error('dimensions')
                        <error class="absolute text-red-500 text-md text-justify font-bold translate-y-6 w-full flex flex-wrap justify-center items-center">{{ $message }}</error>
                    @enderror
                </div>
                <div @class([
                    "transition-all duration-500 ease-in-out w-full flex justify-center items-left pl-2 pr-2",
                    "relative mb-5" => $errors->has('prix')
                    ])
                    >
                    <label for="duree" class="text-xl w-1/5">Prix : </label>
                    <input type="text" name="prix" id="duree" placeholder="Entrez la prix" class="transition-all duration-500 ease-in-out bg-transparent pl-5 pr-5 text-lg w-4/5" value="{{ old('prix') ?? $data->prix }}">
                    @error('prix')
                        <error class="absolute text-red-500 text-md text-justify font-bold translate-y-6 w-full flex flex-wrap justify-center items-center">{{ $message }}</error>
                    @enderror
                </div>
                <div @class([
                    "transition-all duration-500 ease-in-out w-full flex justify-center items-left pl-2 pr-2",
                    "relative mb-5" => $errors->has('image')
                    ])
                    >
                    <label for="duree" class="text-xl w-1/5">Image : </label>
                    <input type="text" name="image" id="duree" placeholder="Entrez l'image" class="transition-all duration-500 ease-in-out bg-transparent pl-5 pr-5 text-lg w-4/5" value="{{ old('image') ?? $data->image }}">
                    @error('image')
                        <error class="absolute text-red-500 text-md text-justify font-bold translate-y-6 w-full flex flex-wrap justify-center items-center">{{ $message }}</error>
                    @enderror
                </div>
                <div class="transition-all duration-500 ease-in-out w-full flex justify-center items-center pb-3">
                    <button type="submit" class="transition-all duration-500 ease-in-out relative text-xl font-extrabold w-60 h-12">Modifier</button>
                </div>
            </form>
        @empty
            <span>Aucun resultat</span>
        @endforelse
    </body>
@endsection
