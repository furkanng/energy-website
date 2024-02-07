<?php

namespace App\Http\Controllers\Admin\Shop;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
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
        $brands = Brand::orderBy('sira', 'asc')->get();
        return view('user.pages.brand', compact("brands"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            "image" => "required",
        ]);
        $model = new Brand();
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
        $brand = Brand::findOrFail($id);
        return view("user.pages.brandEdit", compact("brand"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            "image" => "required|sometimes",
        ]);
        $model = Brand::findOrFail($id);
        $model->fill($request->all())->forceFill([
            'status' => $request->has('status') ? 1 : 0,
        ])->save();
        return redirect()->route("panel.brand.index");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $model = Brand::findOrFail($id);
        $model->delete();
        return redirect()->back()->with('success', 'Başarıyla yüklendi.');
    }
}
