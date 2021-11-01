<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index() {
        // Prendo l'utente registrato:
        $user = Auth::user();
        // Lo passo alla view: 
        return view('dashboard', compact('user'));
    }


}
