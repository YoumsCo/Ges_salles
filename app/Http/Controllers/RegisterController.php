<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\RedirectResponse;

class RegisterController extends Controller
{
    function __construct()
    {
        $this->middleware('guest');
    }

    function show():View {
        return view('form');
    }

    function sign_auth(Request $request) {
        if ($request->action === 'register') {
            $credentials = $request->validate([
                'nom' => ['required', 'string', "regex:/^[a-zA-Z]*[']{0,2}[a-zA-Z]*[\-]?[a-zA-Z]*[0-9]?$/", 'between:3, 30'],
                'email' => ['required', 'email', "regex:/^[a-zA-Z]*[0-9]{0,3}[@](gmail|yahoo|outlook)\.(com|fr)$/", 'unique:users', 'between:10, 45'],
                'password' => ['required', 'string', 'between:8, 30'],
            ]);

            $credentials['password'] = Hash::make($credentials['password']);
            Auth::login(User::create($credentials));
            return redirect()->route('home')->with('message', 'Bienvenue');
        }
        elseif ($request->action === 'login') {
            $credentials = $request->validate([
                'email' => ['required', 'email', "regex:/^[a-zA-Z]*[0-9]{0,3}[@](gmail|yahoo|outlook)\.(com|fr)$/", 'between:10, 45'],
                'password' => ['required', 'string', 'between:8, 30'],
            ]);

            if (Auth::attempt($credentials)) {
                $request->session()->regenerate();
                if (Auth::attempt($credentials) && Auth::user()->role === 'admin') {
                    return redirect()->route('home')->with('message', "Bon retour administrateur:\r".Auth::user()->nom);
                }
                return redirect()->route('home')->with('message', "Bon retour\r".Auth::user()->nom);
            }

            return redirect()->route('auth')->with('fail', 'Authentification échouée');
        }
    }
}
