<?php

namespace App\Http\Controllers;

use App\Models\Room;
use App\Models\User;
use Illuminate\View\View;
use App\Models\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\RedirectResponse;
use App\Http\Controllers\ProfileController;

class RoomsController extends Controller
{
    function __construct()
    {
        $this->middleware('auth');
    }

    function show(Request $request):View {
        $profile = new ProfileController();
        if ($request->search !== null) {
            return view('home', [
                "datas" => Room::where('description', 'LIKE', "%".$request->search."%")
                            ->paginate(5),
                'image' => $profile->verification()
            ]);
        }
        return view('home', [
            "datas" => Room::latest()->paginate(5),
            'image' => $profile->verification()
        ]);
    }

    function show_one(int $id):View {
        return view('room', [
            "datas" => Room::all()->where('id', $id),
        ]);
    }

    function show_form(int $id):View {
        return view('reservation', [
            "datas" => Room::all()->where('id', $id),
        ]);
    }

    function reservation(Request $request):RedirectResponse {
        $validated = $request->validate([
            'duree' => ['required', 'integer', 'max:12'],
            'date' => ['required', 'date'],
        ]);
        list($year, $month, $date) = explode("-", $request->date);
        if ($year >= date('Y')) {
            if ($month === date('m')) {
                if ($date < (date('d') + 8)) {
                    Reservation::create([
                        'user_id' => Auth::user()->id,
                        'room_id' => $request->hidden,
                        'duree' => $request->duree . 'H',
                        'date' => $request->date,
                    ]);
                    $message = [
                        "subject" => "Message de confirmation",
                        "body" => Auth::user()->nom . " votre reservationc& été effectuée avec succès",
                    ];
                    Mail::send('mail_reservation', $message, function ($mail) {
                        $mail->to(Auth::user()->email);
                        $mail->from('youmschoco@gmail.com', config('app.name'));
                    });
                    return redirect()->route('home')->with('notif', 'Reservation effectuée');
                }
                else {
                    return redirect()->back()->with('fail', 'Date de reservation trop lointaine');
                }
                }
            else {
                return redirect()->back()->with('fail', 'Date de reservation trop lointaine');
            }
        }
        else {
            return redirect()->back()->with('fail', 'Date invalide');
        }
    }
}
