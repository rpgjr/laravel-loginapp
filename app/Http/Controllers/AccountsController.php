<?php

namespace App\Http\Controllers;

use App\Models\Accounts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AccountsController extends Controller
{
    public function registerAccount(Request $request) {
        $request->validate([
            'full_name' => 'required|string',
            'username'  => 'required|string|unique:accounts',
            'email'     => 'required|unique:accounts|email',
            'password'  => 'required|min:8',
        ]);

        $newAccount = new Accounts();
        $newAccount->full_name  = $request->full_name;
        $newAccount->username   = $request->username;
        $newAccount->email      = $request->email;
        $newAccount->password   = Hash::make($request->password);
        $newAccount->save();

        return redirect(route('login-page'))->with('success', 'Registered Successfully!');
    }

    public function loginAccount(Request $request) {
        $credentials = [
            'email'     => $request->email,
            'password'  => $request->password
        ];

        if(Auth::attempt($credentials)) {
            return redirect(route('dashboard'))->with('success', 'Login Successfully!');
        }

        return back()->with('fail', 'Email or Password Incorrect!');
    }

    public function logout() {
        Auth::logout();

        return redirect(route('login-page'));
    }
}
