<?php

namespace App\Http\Controllers\Table;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $page = 12;
        $products = Product::latest()->paginate($page);
        return view('admin.table.product.index', compact("products"))->with('i', (request()->input('page', 1) - 1) * $page);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.table.product.create', compact("categories"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);
        $this->validate($request, [
            "description" => "required",
            "image" => "required|image",
            "name" => "required|max:100",
            "price" => "required|integer|min:0",
            "discount" => "required|integer|max:100|min:0",
        ]);

        $category = Category::find($request->category);
        $imgName = time() . "." . $request->image->extension();
        $request->image->move(public_path('images/products'), $imgName);

        $product = Product::create([...$request->all(), "image" => "images/products/$imgName"]);

        // $product->category_id->associate($category);
        $product->save();

        return back()->with('general-status', "$request->name has been created");

        // Product::create(...$request->only("name", "amount", "description"));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return view('admin.table.product.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        $categories = Category::all();
        return view("admin.table.product.edit", compact("product", "categories"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        // dd($product);
        $this->validate($request, [
            "image" => "image",
            "description" => "required",
            "name" => "required|max:100",
            "price" => "required|integer|min:0",
            "discount" => "required|integer|max:100|min:0",
        ]);

        $imgName = $product->image;
        if ($request->image) {
            $imgName = time() . "." . $request->image->extension();
            $request->image->move(public_path('images/products'), $imgName);
        };

        $product->update([...$request->all(), "image" => "images/products/$imgName"]);
        return redirect()->route('admin.product.index')->with('general-status', "$product->name has been updated");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return back()->with('general-status', "$product->name deleted successfully");
    }
}
