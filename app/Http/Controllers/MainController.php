<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\Subscribe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MainController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('page.index', compact("products"));
    }

    public function about()
    {
        return view('page.about');
    }

    public function checkout()
    {
        return view('shopping.checkout');
    }

    public function category(Category $category)
    {
        $categories = Category::all();
        $products = Category::find($category)->products;
        return view('page.category', compact("products", "categories"));
    }

    public function product(Product $product)
    {
        return view('page.product', compact("product"));
    }

    public function subscribe(Request $req)
    {
        $req->validate(['email' => 'required|email']);

        // Subscribe::create(["email" => $req->email]);

        return redirect()->back()->with('general-status', 'Subscribed successfully');
    }

    public function get_contact()
    {
        return view('account.contact');
    }

    public function post_contact(Request $request)
    {
        $this->validate($request, ["email" => 'required|email']);
        $subs = Subscribe::where('email', $request->email);

        if ($subs->exists()) {
            return redirect()->back()->with('general-status', "seems you are part of the family");
        }

        return redirect()->back()->with('general-status', "$request->email have seen subscribed successfully");
    }
}
