@extends('layout.index')
@section('css_js_file')
    @vite(['resources/css/dark_css/profile.css', 'resources/js/profile.js'])
@endsection
@section('icon')
    <link rel="icon" href="{{ asset('/icons/036-profile.ico') }}">
@endsection
@section('title')
    Profile
@endsection

@section('body')
    <body class="transition-sm duration-100 ease-in-out flex flex-col justify-center items-center w-screen h-screen bg-black text-white">

        {{-- @include('loader.loader') --}}

        <div id="container" class="relative flex flex-col justify-center items-left border-2 border-white w-88 h-88 gap-3 text-xl p-5 animate-bounce rounded-3xl">
            @forelse ($datas as $value)
                <div id="img" class="transition duration-100 ease-in-out relative flex flex-col justify-center items-center gap-1 w-full h-2/3 animate-pulse">
                    <img src="{{ asset('storage/'.$image) }}" alt="img" class="rounded-full abolsute w-60 h-60">
                    <i class="fa fa-camera transition ease-in-out duration-100 absolute right-12 top-52 text-emerald-400 text-3xl cursor-pointer hover:text-lime-100"></i>
                </div>
                <span class="text-lime-100">Nom : <i class="text-emerald-500">{{ $value->nom }}</i></span>
                <span class="text-lime-100">Email : <i class="text-emerald-500">{{ $value->email }}</i></span>
                <span class="text-lime-100">Mot de passe : <i class="text-emerald-500">*******************</i></span>
                @if(session('message'))
                    <div id="session" class="w-full flex justify-center items-center">
                        <span class="text-lg text-lime-100 font-bold">{{ session('message') }}</span>
                    </div>
                @endif
                @empty
                    <div id="img" class="transition duration-100 ease-in-out relative flex flex-col justify-center items-center gap-1 w-full h-2/3 animate-pulse">
                        <img src="#" alt="empty" class="rounded-full abolsute w-60 h-60">
                    </div>
                    <span class="text-lime-100">Nom : <i class="text-emerald-500">Null</i></span>
                    <span class="text-lime-100">Email : <i class="text-emerald-500">Null</i></span>
                    <span class="text-lime-100">Mot de passe : <i class="text-emerald-500">Null</i></span>
            @endforelse
        </div>

        <div id="contain-all" class="element-hidden transition duration-100 ease-in-out fixed left-0 top-0 w-screen h-screen flex justify-center items-center flex-col z-30">
            <i class="fa fa-close transition duration-100 ease-in-out realtive translate-x-36 translate-y-10 z-10 text-3xl cursor-pointer"></i>
            <div id="change-profile" class="transition duration-100 ease-in-out relative w-88 h-80 bg-black rounded-xl flex flex-col justify-center itmes-center gap-2 animate-pulse">
                <div id="profile-img" class="transition duration-100 ease-in-out w-full h-2/3 flex justify-center items-center">
                    <img src="{{ asset('storage/'.$image) }}" alt="img" class="w-44 h-44 rounded-full">
                </div>
                <form action="{{ route('profile') }}" method="POST" enctype="multipart/form-data" id="form-profile">
                    @csrf
                    <input type="file" name="file" id="file" accept="image/*">
                    <input type="submit" name="button" value="create" id="add">
                    <input type="submit" name="button" value="delete" id="delete">
                </form>
                <div id="button-div" class="transition duration-100 ease-in-out w-full h-1/3 flex justify-center items-center pl-2 pr-2">
                    <label for="delete" class="transition duration-100 ease-in-out relative w-40 h-12 text-2xl font-extrabold flex justify-center items-center">Supprimer</label>
                    <label for="file" class="transition duration-100 ease-in-out relative w-40 h-12 text-2xl font-extrabold flex justify-center items-center">Ajouter</label>
                </div>
            </div>
        </div>
    </body>
@endsection
