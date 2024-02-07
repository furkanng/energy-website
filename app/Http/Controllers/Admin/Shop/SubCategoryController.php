<?php

namespace App\Http\Controllers\Admin\Shop;

use App\Http\Controllers\Controller;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SubCategoryController extends Controller
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
        $subcategories = SubCategory::orderBy('sira', 'asc')->get();
        return view("user.pages.subcategory", compact("subcategories"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            "name" => "required",
        ]);
        $model = new SubCategory();

        if ($request->hasFile('kapak_resim')) {
            $filename = "kapakresim-" . rand(1, 300) . "." . $request->file('kapak_resim')->getClientOriginalExtension();
            Storage::disk('public')->put('kapakResim/' . $filename, file_get_contents($request->file('kapak_resim')));

            $model->kapak_resim = $filename;
            $model->kapak_url = config("app.url") . "/storage/kapakResim/" . $filename;
        }

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
        $subcategory = SubCategory::findOrFail($id);
        return view("user.pages.subCategoryEdit", compact("subcategory"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            "name" => "required|sometimes",
        ]);
        $model = SubCategory::findOrFail($id);

        if ($request->hasFile('kapak_resim')) {
            Storage::disk('public')->delete('kapakResim/' . $model->kapak_resim);
            $filename = "kapakresim-" . rand(1, 300) . "." . $request->file('kapak_resim')->getClientOriginalExtension();
            Storage::disk('public')->put('kapakResim/' . $filename, file_get_contents($request->file('kapak_resim')));

            $model->kapak_resim = $filename;
            $model->kapak_url = config("app.url") . "/storage/kapakResim/" . $filename;
        }

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
        $model = SubCategory::findOrFail($id);
        $model->delete();
        return redirect()->route("panel.category.index");
    }
}
