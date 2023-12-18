<?php

namespace App\Http\Controllers\Admin\Shop;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function __construct()
    {
        #$this->middleware('admin');
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();
        $subcategories = SubCategory::all();
        return view("user.pages.product", compact(["products", "subcategories"]));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            "name" => "required",
            "subcategory_id" => "required",
        ]);
        $model = new Product();
        $model->fill($request->all())->forceFill([
            'status' => $request->has('status') ? 1 : 0,
        ])->save();
        return redirect()->back()->with('success', 'Başarıyla yüklendi.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $product = Product::findOrFail($id);
        $subcategories = SubCategory::all();
        return view("user.pages.productEdit", compact(["product", "subcategories"]));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            "name" => "required|sometimes",
            "subcategory_id" => "required|sometimes",
        ]);
        $model = Product::findOrFail($id);
        $model->fill($request->all())->forceFill([
            'status' => $request->has('status') ? 1 : 0,
        ])->save();
        return redirect()->route("panel.product.index");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $model = Product::findOrFail($id);
        $model->delete();
        return redirect()->route("panel.product.index");
    }
}
