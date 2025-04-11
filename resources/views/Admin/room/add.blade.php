@extends('layout.index')
@section('css_js_file')
    @vite(['resources/css/dark_css/reservation.css', 'resources/js/reservation.js'])
@endsection
@section('icon')
    <link rel="icon" href="{{ asset('/icons/003-home3.ico') }}">
@endsection
@section('title')
    Ajouter une salle
@endsection

@section('body')
    <body class="transition-all duration-500 ease-in-out relative bg-black flex flex-col justify-center items-center w-screen h-screen text-white overflow-hidden">

        @include('loader.loader')

        <form action="{{ route('admin.room.store') }}" method="POST" class="transition-all duration-500 ease-in-out w-5/12 flex flex-col justify-center items-center gap-3 rounded-lg pt-2">
            @csrf
            <div class="transition-all duration-500 ease-in-out w-full flex flex-col justify-center items-center">
                <h2 class="text-lg w-full h-1/12 text-center">Ajouter une salle</h2>
            </div>
            <div @class([
                "transition-all duration-500 ease-in-out w-full flex justify-center items-left pl-2 pr-2",
                "relative mb-5" => $errors->has('intitule')
                ])
                >
                <label for="duree" class="text-xl w-1/5">Intitulé : </label>
                <input type="text" name="intitule" id="duree" placeholder="Entrez l'intitulé" class="transition-all duration-500 ease-in-out bg-transparent pl-5 pr-5 text-lg w-4/5" value="{{ old('intitule') ?? '' }}">
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
                <input type="text" name="apercu" id="duree" placeholder="Entrez la apercu" class="transition-all duration-500 ease-in-out bg-transparent pl-5 pr-5 text-lg w-4/5" value="{{ old('apercu') ?? '' }}">
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
                <input type="text" name="description" id="duree" placeholder="Entrez la description" class="transition-all duration-500 ease-in-out bg-transparent pl-5 pr-5 text-lg w-4/5" value="{{ old('description') ?? '' }}">
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
                <input type="text" name="localisation" id="duree" placeholder="Entrez la localisation" class="transition-all duration-500 ease-in-out bg-transparent pl-5 pr-5 text-lg w-4/5" value="{{ old('localisation') ?? '' }}">
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
                <input type="text" name="dimensions" id="duree" placeholder="Entrez la dimensions" class="transition-all duration-500 ease-in-out bg-transparent pl-5 pr-5 text-lg w-4/5" value="{{ old('dimensions') ?? '' }}">
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
                <input type="text" name="prix" id="duree" placeholder="Entrez la prix" class="transition-all duration-500 ease-in-out bg-transparent pl-5 pr-5 text-lg w-4/5" value="{{ old('prix') ?? '' }}">
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
                <input type="text" name="image" id="duree" placeholder="Entrez l'image" class="transition-all duration-500 ease-in-out bg-transparent pl-5 pr-5 text-lg w-4/5" value="{{ old('image') ?? '' }}">
                @error('image')
                    <error class="absolute text-red-500 text-md text-justify font-bold translate-y-6 w-full flex flex-wrap justify-center items-center">{{ $message }}</error>
                @enderror
            </div>
            <div class="transition-all duration-500 ease-in-out w-full flex justify-center items-center pb-3">
                <button type="submit" class="transition-all duration-500 ease-in-out relative text-xl font-extrabold w-60 h-12">Ajouter</button>
            </div>
        </form>
    </body>
@endsection
