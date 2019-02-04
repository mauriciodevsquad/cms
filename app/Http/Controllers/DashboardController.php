<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function account() {
        $title = "Account";
        return view('dashboard.account')->with('title', $title);
    }

    public function bookings() {
        $title = "Bookings";
        return view('dashboard.bookings')->with('title', $title);
    }

    public function forgot() {
        return view('dashboard.forgot-password');
    }

    public function index() {
        $title = "";
        return view('dashboard.index')->with('title', $title);
    }

    public function login() {
        return view('dashboard.login');
    }

    public function register() {
        return view('dashboard.register');
    }

    public function requestForm() {
        $title = "Request Form";
        return view('dashboard.request-form')->with('title', $title);
    }

    public function requests() {
        $title = "Requests";
        return view('dashboard.requests')->with('title', $title);
    }

    public function settings() {
        $title = "Settings";
        return view('dashboard.settings')->with('title', $title);
    }


}
