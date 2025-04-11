<?php

namespace App\Http\Controllers\Admin;

use App\Models\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Contracts\View\View;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;

class ReservationController extends Controller
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
        if ($request->search !== null && is_numeric(($request->search))) {
            return view('Admin.reservation.list', [
                "datas" => DB::select('select * from reservations inner join rooms on reservations.id = rooms.id and rooms.id = '.$request->search),
                "users_datas" => DB::select('select * from users inner join reservations on users.id = reservations.user_id'),
            ]);
        }

        return view('Admin.reservation.list', [
            "datas" => DB::select('select * from rooms inner join reservations on rooms.id = reservations.room_id'),
            "users_datas" => DB::select('select distinct(email) from users inner join reservations on users.id = reservations.user_id'),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Reservation $reservation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Reservation $reservation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($reservation):RedirectResponse
    {
        Reservation::find($reservation)->delete();
        return redirect()->back()->with('message', 'Reservation supprimée avec succès');
    }
}
