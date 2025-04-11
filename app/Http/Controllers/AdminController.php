<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;

class AdminController extends Controller
{

    function __construct()
    {
        $this->middleware('admin');
    }

    function active($url):string {
        if (strpos(strtolower($_SERVER['PHP_SELF']), strtolower($url))) {
            return 'active-element';
        }
        else {
            return '';
        }
    }
}
