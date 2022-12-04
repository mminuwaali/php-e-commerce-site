<?php

namespace App\Http\Controllers;
use Illuminate\Routing\Controller;

class View extends Controller
{
    public function index()
    {
        return view('pages.index');
    }
    public function about()
    {
        return view('pages.about');
    }
    public function product()
    {
        return view('pages.product');
    }
    public function categories()
    {
        return view('pages.categories');
    }
    public function category()
    {
        return view('pages.category');
    }
    public function cart()
    {
        return view('pages.cart');
    }
    public function fav()
    {
        return view('pages.fav');
    }
    public function checkout()
    {
        return view('pages.checkout');
    }
}
