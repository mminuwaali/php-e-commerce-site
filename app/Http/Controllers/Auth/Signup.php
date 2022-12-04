<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Hash;

class Signup extends Controller
{
    public function __construct()
    {
        $this->middleware(['guest']);
    }
    public function get()
    {
        return view('auth.signup');
    }
    public function post(Request $req)
    {
        $req->validate([
            'name' => 'required|max:255',
            'username' => 'required|max:255',
            'password' => 'required|confirmed',
            'email' => 'required|email|max:255',
        ]);

        User::create([
            'name' => $req->get('name'),
            'email' => $req->get('email'),
            'username' => $req->get('username'),
            'password' => Hash::make($req->get('password')),
        ]);

        auth()->attempt($req->only('email', 'password'));

        return redirect()->route('index');
    }
}
