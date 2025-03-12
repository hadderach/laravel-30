<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;


class SessionController extends Controller
{
    public function create()
    {
        return view("auth.login");
    }

    public function store(Request $request)
    {
        $credentials = $request->validate([

            'email' => ['required', 'email'],

            'password' => ['required'],

        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/jobs');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }

    public function destroy()
    {
        // Logic to log out the user   
        Auth::logout();
        return redirect('/');

    }
}
