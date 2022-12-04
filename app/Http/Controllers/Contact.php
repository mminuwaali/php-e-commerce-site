<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class Contact extends Controller
{
    public function get()
    {
        return view('pages.contact');
    }

    public function post()
    {
        # code...
    }
}
