<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class HistoriqueController extends Controller
{
    function __construct()
    {
        $this->middleware('auth');
    }

    function index():View {
        return view('historique', [
            'datas' => DB::select('select * from rooms inner join reservations on rooms.id = reservations.room_id and user_id = ' .Auth::user()->id),
        ]);
    }
}
