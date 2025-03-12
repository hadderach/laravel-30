<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use App\Models\User;
class RegisteredUserController extends Controller
{
    public function create()
    {
        return view("auth.register");
    }

    public function store(Request $request)
    {
        $validated = request()->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed|'
        ]);

        $user = User::create($validated);
        Auth::login($user);
        return redirect('/jobs');
    }
}
