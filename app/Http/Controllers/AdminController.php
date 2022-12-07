<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;

class AdminController extends Controller
{
    public function __construct()
    {
        // $this->middleware("auth");
    }

    public function index()
    {
        return view('admin.index');
    }

    public function database()
    {

        $tables = [
            "product" => Product::class,
            "category" => Category::class,
        ];
        asort($tables);

        return view('admin.database', compact("tables"));
    }
}
