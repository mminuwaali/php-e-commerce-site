<?php

namespace App\Http\Controllers;

use App\Models\Subscribe;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class Forms extends Controller
{
    public function logout()
    {
        auth()->logout();

        return redirect()->route('index');
    }

    public function subscription(Request $req)
    {
        $req->validate(['email' => 'required|email']);

        Subscribe::create([$req->only('email')]);

        return redirect()->back()->with('status', 'Subscribed successfully');
    }
}
