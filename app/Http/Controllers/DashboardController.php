<?php

namespace App\Http\Controllers;

use App\Client;
use App\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $title   = 'Dashboard';
        $user_id = auth()->user()->id;
        $user    = User::find($user_id);
        $consults = $user->consults;

        return view('dashboard', ['title' => $title, 'clients' => $user->clients, 'consults' => $consults, 'user_id' => $user_id]);
    }
}
