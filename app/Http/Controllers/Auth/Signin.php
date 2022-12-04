<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
// use Illuminate\Controllers\Controller;
use Illuminate\Routing\Controller;

class Signin extends Controller
{
    public function __construct()
    {
        $this->middleware(['guest']);
    }
    public function get()
    {
        return view('auth.signin');
    }
    public function post(Request $req)
    {
        $req->validate([
            'password' => 'required',
            'email' => 'required|email',
        ]);

        if (!auth()->attempt($req->only('email', 'password'))) {
            return back()->with('status', 'Invalid credentials');
        };

        return redirect()->route('index');
    }
}
