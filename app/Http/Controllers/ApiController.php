<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use App\Models\Reservation;
use App\Models\Notification;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ApiController extends Controller
{
    function ___construct() {
        $this->middleware('auth');
    }

    function notification() {
        $datas = [
            "app_name" => config('app.name'),
        ];
        return response()->json($datas);
    }

    function dev_info():JsonResponse {
        $datas = [
            "name" => "Youms",
            "email" => "youmsc.co@gmail.com",
        ];
        return response()->json($datas);
    }
}
