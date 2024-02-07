<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Marka;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MarkaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $catalogs = Marka::orderBy('sira', 'asc')->get();
        return view('user.pages.marka', compact("catalogs"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            "image" => "required",
        ]);
        $model = new Marka();
        if ($request->hasFile('pdf')) {
            $pdfFile = $request->file('pdf');
            $filename = "marka-" . rand(1, 300) . "." . $pdfFile->getClientOriginalExtension();
            Storage::disk('public')->put('pdf/' . $filename, file_get_contents($pdfFile));

            $model->forceFill([
                'pdf' => $filename,
            ]);
        }
        if ($request->hasFile('image')) {
            $pdfFile = $request->file('image');
            $filename = "marka-" . rand(1, 300) . "." . $pdfFile->getClientOriginalExtension();
            Storage::disk('public')->put('brand/' . $filename, file_get_contents($pdfFile));

            $model->forceFill([
                'image' => $filename,
            ]);
        }
        $model->forceFill([
            'status' => $request->has('status') ? 1 : 0,
            "sira" => $request->get("sira")
        ])->save();
        return redirect()->back()->with('success', 'Başarıyla yüklendi.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $catalog = Marka::findOrFail($id);
        return view("user.pages.markaEdit", compact("catalog"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            "image" => "required|sometimes",
        ]);
        $model = Marka::findOrFail($id);

        if ($request->hasFile('pdf')) {
            Storage::disk('public')->delete('pdf/' . $model->pdf);
            $pdfFile = $request->file('pdf');
            $filename = "document-" . rand(1, 300) . "." . $pdfFile->getClientOriginalExtension();
            Storage::disk('public')->put('pdf/' . $filename, file_get_contents($pdfFile));

            $model->forceFill([
                'pdf' => $filename,
            ]);
        }

        if ($request->hasFile('image')) {
            Storage::disk('public')->delete('image/' . $model->pdf);
            $pdfFile = $request->file('image');
            $filename = "marka-" . rand(1, 300) . "." . $pdfFile->getClientOriginalExtension();
            Storage::disk('public')->put('brand/' . $filename, file_get_contents($pdfFile));

            $model->forceFill([
                'image' => $filename,
            ]);
        }

        $model->forceFill([
            'status' => $request->has('status') ? 1 : 0,
            "sira" => $request->get("sira")
        ])->save();
        return redirect()->route("panel.marka.index");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $model = Marka::findOrFail($id);
        Storage::disk('public')->delete('pdf/' . $model->pdf);
        Storage::disk('public')->delete('brand/' . $model->image);
        $model->delete();
        return redirect()->back()->with('success', 'Başarıyla yüklendi.');
    }
}
