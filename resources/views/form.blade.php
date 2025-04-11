@extends('layout.index')
@section('css_js_file')
    @vite(['resources/css/dark_css/style.css', 'resources/js/script.js'])
@endsection
@section('icon')
    <link rel="icon" href="{{ asset('/icons/114-user.ico') }}">
@endsection
@section('title')
    Inscription_Connexion
@endsection

@section('body')
    <body>
        @if(session('message'))
            <div class="w-full bg-green-300 text-center">
                <message class="text-black font-extrabold text-xl">{{ session('message') }}</message>
            </div>
        @endif
        @if(session('fail'))
            <div class="w-full bg-red-500 text-center">
                <message class="text-black font-extrabold text-xl">{{ session('fail') }}</message>
            </div>
        @endif
        @include('loader.loader')
        <div id="container">
            {{-- Formulaire d'inscription --}}
            <div class="container-form form-sign-up">
                <form action="{{ route('auth') }}" method="POST">
                    @csrf
                    <div class="form-title">
                        <marquee direction="rigth">
                            <h1>Inscrivez-vous</h1>
                        </marquee>
                    </div>
                    <div id="accounts">
                        <i class="fa fa-google-plus"></i>
                        &nbsp;
                        <i class="fa fa-facebook-f"></i>
                        &nbsp;
                        <i class="fa fa-linkedin"></i>
                    </div>
                    <div>
                        <input type="text" name="nom" placeholder="Entrez votre nom" minlength="3" maxlength="30" title="Nom" pattern="[a-zA-Z]*[']{0,2}[a-zA-Z]*[\-]?[a-zA-Z]*[0-9]?" value="{{ old('nom') ?? '' }}" required>
                        <label class="label">Nom</label>
                        <i class="fa fa-user-circle-o"></i>
                        @error('nom')
                            <error class="text-red-500 text-md text-justify font-bold">{{ $message }}</error>
                        @enderror
                    </div>
                    <div>
                        <input type="email" name="email" placeholder="Entrez votre email" minlength="10" maxlength="45" title="Email" pattern="[a-zA-Z]*[0-9]{0,3}[@](gmail|yahoo|outlook)\.(com|fr)" value="{{ old('email') ?? '' }}" required>
                        <label class="label">Email</label>
                        <i class="fa fa-envelope-o"></i>
                        @error('email')
                            <error class="text-red-500 text-md text-justify font-bold">{{ $message }}</error>
                        @enderror
                    </div>
                    <div>
                        <input type="password" name="password" placeholder="Entrez votre mot de passe" minlength="8" maxlength="30" title="Mot de passe" required>
                        <label class="label">Mot de passe</label>
                        <i class="fa fa-eye" id="eye"></i>
                        @error('password')
                            <error class="text-red-500 text-md text-justify font-bold">{{ $message }}</error>
                        @enderror
                    </div>
                    <div class="none">
                        <input type="hidden" value="register" name="action">
                    </div>
                    <div>
                        <input type="submit" value="Soumettre" title="Envoyer">
                        <br>
                        <span>Vous avez déjà un compte ? &nbsp; <a href="#" class="link-form">Connexion. &nbsp; <a href="whatsapp://send? phone=+237690552385">Aide?</a></a></span>
                    </div>
                </form>
            </div>
            {{-- Formulaire de connexion --}}
            <div class="container-form form-login">
                <form action="{{ route('auth') }}" method="POST">
                    @csrf
                    <div class="form-title">
                        <marquee bgcolor="transparent" direction="rigth">
                            <h1>Connectez-vous</h1>
                        </marquee>
                    </div>
                    <div id="accounts">
                        <i class="fa fa-google-plus"></i>
                        &nbsp;
                        <i class="fa fa-facebook-f"></i>
                        &nbsp;
                        <i class="fa fa-linkedin"></i>
                    </div>
                    <div>
                        <input type="email" name="email" placeholder="Entrez votre email"  minlength="10" maxlength="45" title="Email" pattern="[a-zA-Z]*[0-9]{0,3}[@](gmail|yahoo|outlook)\.(com|fr)" value="{{ old('email') ?? '' }}" required>
                        <label class="label">Email</label>
                        <i class="fa fa-envelope-o"></i>
                        @error('email')
                            <error class="text-red-500 text-md text-justify font-bold">{{ $message }}</error>
                        @enderror
                    </div>
                    <div>
                        <input type="password" name="password" placeholder="Entrez votre mot de passe" minlength="8" maxlength="30" title="Mot de passe" required>
                        <label class="label">Mot de passe</label>
                        <i class="fa fa-eye"></i>
                        @error('password')
                            <error class="text-red-500 text-md text-justify font-bold">{{ $message }}</error>
                        @enderror
                    </div>
                    <div class="none">
                        <input type="hidden" value="login" name="action">
                    </div>
                    <div>
                        <input type="submit" value="Soumettre" title="Envoyer">
                        <span>Pas encore de compte ? &nbsp; <a href="#" class="link-form">Inscription. &nbsp; <a href="mailto:youmschoco@gmail.com">Aide?</a></a></span>
                    </div>
                </form>
            </div>
            {{-- Informations --}}
            <div id="container-info">
                <div class="container-info sign-up">
                    <div class="info">
                        <p>
                            Vous avez peut-etre un compte !
                        </p>
                        <button type="button" class="button">Connectez-vous</button>
                    </div>
                </div>
                <div class="container-info login">
                    <div class="info">
                        <p>
                            Vous n'avez pas de compte ?
                        </p>
                        <button type="button" class="button">Inscrivez-vous</button>
                    </div>
                </div>
            </div>
            <div>
                <div class="ears top left"></div>
                <div class="ears top right"></div>
                <div class="ears bottom left"></div>
                <div class="ears bottom right"></div>
            </div>
        </div>
    </body>
@endsection
