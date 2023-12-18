<?php

namespace App\Http\Controllers\Admin\Shop;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class CategoryController extends Controller
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
        $categories = Category::all();
        $subcategories = SubCategory::all();
        return view("user.pages.category", compact(["categories", "subcategories"]));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            "name" => "required",
            "image" => "max:1000"
        ]);
        $model = new Category();
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
        $category = Category::findOrFail($id);
        return view("user.pages.categoryEdit", compact("category"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            "name" => "required|sometimes",
        ]);
        $model = Category::findOrFail($id);
        $model->fill($request->all())->forceFill([
            'status' => $request->has('status') ? 1 : 0,
        ])->save();
        return redirect()->route("panel.category.index");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $model = Category::findOrFail($id);
        $model->delete();
        $model->subcategory()->delete();
        return redirect()->route("panel.category.index");
    }
}
