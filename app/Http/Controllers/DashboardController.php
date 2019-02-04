<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function account() {
        return view('dashboard.account');
    }

    public function bookings() {
        return view('dashboard.bookings');
    }

    public function clients() {
        return view('dashboard.clients');
    }

    public function forgot() {
        return view('dashboard.forgot-password');
    }

    public function index() {
        return view('dashboard.index');
    }

    public function login() {
        return view('dashboard.login');
    }

    public function register() {
        return view('dashboard.register');
    }

    public function requestForm() {
        return view('dashboard.request-form');
    }

    public function requests() {
        return view('dashboard.requests');
    }

    public function settings() {
        return view('dashboard.settings');
    }


}
