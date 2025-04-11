<?php

namespace App\Http\Controllers\Admin;

use App\Models\Room;
use App\Models\User;
use Illuminate\View\View;
use App\Models\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;

class RoomController extends Controller
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
            return view('Admin.room.list', [
                "datas" => DB::table('rooms')->where('id', $request->search)
                                            ->orWhere('intitule', 'like', '%'.$request->search.'%')
                                            ->orWhere('dimensions', 'like', '%'.$request->search.'%')
                                            ->orWhere('prix', 'like', '%'.$request->search.'%')
                                            ->paginate(5),

            ]);
        }
        return view('Admin.room.list', [
            "datas" => Room::paginate(5),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create():View
    {
        return view('Admin.room.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $datas = $request->validate([
            'intitule' => ['required', 'string', 'unique:rooms'],
            'localisation' => ['required', 'string'],
            'apercu' => ['required', 'string'],
            'description' => ['required'],
            'dimensions' => ['required', 'string'],
            'prix' => ['required', 'regex:/^\d{2,3}€$/'],
            'image' => ['required'],
        ]);
        Room::create($datas);
        return redirect()->route('admin.room.index')->with('message', 'Salle ajoutées avec succès');
    }

    /**
     * Display the specified resource.
     */
    public function show($room)
    {
        return view('Admin.room.show_one', [
            'datas' => DB::table('rooms')->where('id', $room)->get(),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($room):View
    {
        return view('Admin.room.edit', [
            "datas" => Room::all()->where('id', $room),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $room):RedirectResponse
    {
        $datas = $request->validate([
            'intitule' => ['required', 'string', 'unique:rooms'],
            'localisation' => ['required', 'string'],
            'apercu' => ['required', 'string'],
            'description' => ['required'],
            'dimensions' => ['required', 'string'],
            'prix' => ['required', 'regex:/^\d{2,3}€$/'],
            'image' => ['required'],
        ]);
        if (Room::find($room)->update(array_merge(Room::find($room)->toArray(), $datas))) {
            return redirect()->route('admin.room.index')->with('message', 'Données modifiées avec succès');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($room):RedirectResponse
    {
        $reservations = DB::select('select * from reservations where room_id = '.$room);
        foreach($reservations as $r) {
            if ($r->id !== null) {
                DB::select('delete from reservations where id = '.$r->id);
            }
        }
        Room::find($room)->delete();
        return redirect()->back()->with('message', 'Salle supprimée avec succès');
    }
}
