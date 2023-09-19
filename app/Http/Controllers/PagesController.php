<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function getLoginPage() {
        return view('Auth.login');
    }

    public function getRegisterPage() {
        return view('Auth.register');
    }

    public function getDashboard() {
        return view('dashboard');
    }
}
