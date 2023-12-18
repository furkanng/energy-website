<?php

namespace App\Http\Controllers\Admin\Cms;

use App\Http\Controllers\Controller;
use App\Models\Catalog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CatalogController extends Controller
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
        $catalogs = Catalog::all();
        return view("user.pages.catalog", compact("catalogs"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $model = new Catalog();
        $model->fill($request->all())->forceFill([
            'status' => $request->has('status') ? 1 : 0,
        ]);

        if ($request->hasFile('pdf')) {
            $pdfFile = $request->file('pdf');
            $filename = "document-" . rand(1, 300) . "." . $pdfFile->getClientOriginalExtension();
            Storage::disk('public')->put('pdf/' . $filename, file_get_contents($pdfFile));

            $model->forceFill([
                'pdf' => $filename,
            ]);
        }

        $model->save();

        return redirect()->back()->with('success', 'Başarıyla yüklendi.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $catalog = Catalog::findOrFail($id);
        return view("user.pages.catalogEdit", compact("catalog"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $model = Catalog::findOrFail($id);

        $model->fill($request->all())->forceFill([
            'status' => $request->has('status') ? 1 : 0,
        ]);

        if ($request->hasFile('pdf')) {
            Storage::disk('public')->delete('pdf/' . $model->pdf);
            $pdfFile = $request->file('pdf');
            $filename = "document-" . rand(1, 300) . "." . $pdfFile->getClientOriginalExtension();
            Storage::disk('public')->put('pdf/' . $filename, file_get_contents($pdfFile));

            $model->forceFill([
                'pdf' => $filename,
            ]);
        }

        $model->save();
        return redirect()->back()->with('success', 'Başarıyla yüklendi.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $model = Catalog::findOrFail($id);
        Storage::disk('public')->delete('pdf/' . $model->pdf);
        $model->delete();
        return redirect()->route("panel.category.index");
    }
}
