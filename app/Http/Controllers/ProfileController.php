<?php

namespace App\Http\Controllers;

use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Termwind\Components\Element;

class ProfileController extends Controller
{
    function __construct()
    {
        $this -> middleware('auth');
    }
    function index():View {

        return view('profile', [
            'datas' => DB::table('users')->where('id', Auth::user()->id)->get(),
            'image' => $this->verification(),
        ]);
    }

    function profile_save(Request $request):RedirectResponse {
        if ($request->input('button') === 'delete') {
            if ($this->get_picture() !== []) {
                foreach($this->get_picture() as $img) {
                    Storage::disk('public')->delete($img);
                    return redirect()->back()->with('message', 'Suppéssion effectuée');
                }
            }
            return redirect()->back()->with('message', 'Aucune photo trouvée');
        }
        else {
            if ($this->get_picture() !== []) {
                foreach($this->get_picture() as $img) {
                    Storage::disk('public')->delete($img);
                }
            }
            
            $file_name = config('app.name') . '_' . Auth::user()->nom . '_' . $request->file('file')->getClientOriginalName();
            Storage::disk('public')->put($file_name, file_get_contents($request->file('file')), true);
            return redirect(RouteServiceProvider::HOME)->with('message', 'Fichier téléchargé avec succès');
        }
    }

    function get_picture():array {
        $tab = [];
        foreach(Storage::disk('public')->files('/') as $file) {
            if (strpos($file, Auth::user()->nom) && $file !== 'user.png') {
                array_push($tab, $file);
                break;
            }
        }
        return $tab;
    }

    function verification():string {
        if ($this->get_picture() !== []) {
            foreach($this->get_picture() as $file)
            return $file;
        }
        else {
            return 'user.png';
        }
    }

}
