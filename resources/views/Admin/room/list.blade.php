@extends('layout.index')
@section('css_js_file')
    @vite(['resources/css/dark_css/Admin/list.css', 'resources/js/Admin/list.js'])
@endsection
@section('icon')
    <link rel="icon" href="{{ asset('/icons/003-home3.ico') }}">
@endsection
@section('title')
    Liste des salles
@endsection
@section('body')
    <body class="transition-all duration-500 ease-in-out flex flex-col justify-start items-start gap-6 w-screen h-screen bg-black">

        @include('Admin.layout.side')
        @include('loader.loader')

        @if(session('message'))
            <div id="session" class="transition-all duration-500 ease-in-out fixed top-0 left-1/3 text-white w-80 h-40 flex justify-center items-center z-10 border-2 border-white">
                <span class="transition-all duration-500 ease-in-out bg-black w-10/12 flex justify-center items-center flex-wrap translate-x-2 text-center font-extrabold text-xl rounded-xl p-2">{{ session('message') }}</span>
                <i class="fa fa-close abslute top-0 right-4 -translate-y-16 cursor-pointer text-2xl"></i>
            </div>
        @endif

        <h1 class="transition-all duration-500 ease-in-out w-full text-center text-white text-3xl pt-5 pb-2">Liste des salles</h1>


        <div id="contain-search-bar" class="transition-all duration-500 ease-in-out relative w-screen flex justify-start items-center flex-wrap gap-2">
            <form action="{{ route('admin.room.index') }}" method="GET" class="transition-all duration-500 ease-in-out w-80">
                @csrf
                <input type="text" name="search" class="transition-all duration-500 ease-in-out w-full h-10 pl-2 pr-10 bg-transparent border-2 border-white text-xl text-white placeholder:text-white shadow-md shadow-white" placeholder="Rechercher..." value="{{ old('search') ?? '' }}">
                <button type="submit" class="fa fa-search transition-all duration-500 ease-in-out absolute top-1 left-72 text-xl"></button>
            </form>
            <a href="{{ route('admin.room.create') }}" class="relative transition-all duration-500 ease-in-out w-60 h-10 flex justify-center items-center text-lg text-blue-950 font-extrabold border-2 border-white bg-white hover:bg-transparent active:scale-75" id="add">Ajouter</a>
        </div>

        {{ $datas->links() }}

        <table class="transition-all duration-500 ease-in-out w-full text-center text-white border-separate" cellspacing="10">
            <tr>
                <th class="transition-all duration-500 ease-in-out text-xl text-center border-2 border-white">id</th>
                <th class="transition-all duration-500 ease-in-out text-xl text-center border-2 border-white">Intitule</th>
                <th class="transition-all duration-500 ease-in-out text-xl text-center border-2 border-white">Dimensions</th>
                <th class="transition-all duration-500 ease-in-out text-xl text-center border-2 border-white">Image</th>
                <th class="transition-all duration-500 ease-in-out text-xl text-center border-2 border-white">Voir</th>
                <th class="transition-all duration-500 ease-in-out text-xl text-center border-2 border-white">Modifier</th>
                <th class="transition-all duration-500 ease-in-out text-xl text-center border-2 border-white">Supprimer</th>
            </tr>
            @forelse ($datas as $data)
                <tr>
                    <td class="transition-all duration-500 ease-in-out text-xl text-center">{{ $data->id }}</td>
                    <td class="transition-all duration-500 ease-in-out text-xl text-center">{{ $data->intitule }}</td>
                    <td class="transition-all duration-500 ease-in-out text-xl text-center">{{ $data->dimensions }}</td>

                    {{-- <td class="transition-all duration-500 ease-in-out text-xl text-center flex justify-center items-center"><img src="{{ $data->image }}" alt="img" class="transition-all duration-500 ease-in-out w-40 h-32 rounded-md"></td> --}}
                    <td class="transition-all duration-500 ease-in-out text-xl text-center flex justify-center items-center"><img src="{{ asset('img/pexels-eberhard-grossgasteiger-1421903.jpg') }}" alt="img" class="transition-all duration-500 ease-in-out w-40 h-32 rounded-md"></td>

                    <td class="transition-all duration-500 ease-in-out text-xl text-center"><a href="{{ route('admin.room.show', $data->id) }}" class="fa fa-eye text-2xl text-lime-200 hover:cursor-pointer"></a></td>
                    <td class="transition-all duration-500 ease-in-out text-xl text-center"><a href="{{ route('admin.room.edit', $data->id) }}" class="fa fa-edit text-2xl text-green-500 hover:cursor-pointer"></a></td>
                    <td class="transition-all duration-500 ease-in-out text-center">
                        <form action="{{ route('admin.room.destroy', $data->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="fa fa-trash-o text-2xl text-red-500 hover:cursor-pointer"></button>
                        </form>
                    </td>
                </tr>

                @empty
                    <tr>
                        <td class="transition-all duration-500 ease-in-out text-center border-2 border-white">Null</td>
                        <td class="transition-all duration-500 ease-in-out text-center border-2 border-white">Null</td>
                        <td class="transition-all duration-500 ease-in-out text-center border-2 border-white">Null</td>
                        <td class="transition-all duration-500 ease-in-out text-center border-2 border-white">Null</td>
                        <td class="transition-all duration-500 ease-in-out text-center border-2 border-white">Null</td>
                        <td class="transition-all duration-500 ease-in-out text-center border-2 border-white">Null</td>
                        <td class="transition-all duration-500 ease-in-out text-center border-2 border-white">Null</td>
                    </tr>
            @endforelse
        </table>
        {{ $datas->links() }}
    </body>
@endsection
