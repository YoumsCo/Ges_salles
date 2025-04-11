<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\ProfileController;
use Illuminate\Http\RedirectResponse;

class UserController extends Controller
{

    function __construct()
    {
        $this->middleware('admin');
    }

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request):View
    {
        if ($request->search !== null) {
            return view('Admin.user.list', [
                "datas" => DB::table('users')->where('id', $request->search)
                                            ->orWhere('nom', 'like', '%'.$request->search.'%')
                                            ->orWhere('email', 'like', '%'.$request->search.'%')
                                            ->paginate(5),

            ]);
        }
        return view('Admin.user.list', [
            'datas' => DB::table('users')->where('role', 'user')->orderBy('nom', 'asc')->get()
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show($user):View
    {
        $profile = new ProfileController();
        return view('Admin.user.show_one', [
            "datas" => User::all()->where('id', $user),
            "image" =>  $profile->verification(),
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($user):RedirectResponse
    {
        $reservations = DB::select('select * from reservations where user_id = '.$user);
        foreach($reservations as $r) {
            if ($r->id !== null) {
                DB::select('delete from reservations where id = '.$r->id);
            }
        }
        User::find($user)->delete();
        return redirect()->back()->with('message', 'Données supprimées avec succès');
    }

    function get_picture($user):bool {
        $found = false;
        $datas = DB::select('select nom from users where id = '.$user);
        foreach(Storage::disk('public')->files('/') as $file) {
            foreach($datas as $data) {
                if (strpos($file, $data) && $file !== 'user.png') {
                    // array_push($tab, $file);
                    $found = true;
                    Storage::disk('public')->delete($data);
                    break;
                }
            }
        }
        return $found;
    }
}
