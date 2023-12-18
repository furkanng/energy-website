<?php

namespace App\Http\Controllers\Admin\Cms;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SliderController extends Controller
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
        $sliders = Slider::all();
        return view("user.pages.slider", compact("sliders"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'image.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $filename = "slider-" . rand(1, 300) . "." . $request->file('image')->getClientOriginalExtension();
            Storage::disk('public')->put('slider/' . $filename, file_get_contents($request->file('image')));
            (new Slider())->fill([
                "title" => $request->get("title"),
                "image" => $filename,
                "url" => config("app.url") . "/storage/slider/" . $filename,
                'status' => $request->has('status') ? 1 : 0,
            ])->saveQuietly();
            return redirect()->back()->with('success', 'Resimler başarıyla yüklendi.');
        }
        return redirect()->back()->with('error', 'Yüklenecek resim bulunamadı.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $slider = Slider::findOrFail($id);
        return view("user.pages.sliderEdit", compact("slider"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $model = Slider::findOrFail($id);

        $request->validate([
            'image.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($request->hasFile('image')) {
            Storage::disk('public')->delete('slider/' . $model->image);
            $filename = "slider-" . rand(1, 300) . "." . $request->file('image')->getClientOriginalExtension();
            Storage::disk('public')->put('slider/' . $filename, file_get_contents($request->file('image')));
            $model->fill([
                "title" => $request->get("title"),
                "image" => $filename,
                "url" => config("app.url") . "/storage/slider/" . $filename,
                'status' => $request->has('status') ? 1 : 0,
            ])->saveQuietly();
            return redirect()->back()->with('success', 'Resimler başarıyla yüklendi.');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): \Illuminate\Http\RedirectResponse
    {
        $model = Slider::findOrFail($id);
        Storage::disk('public')->delete('slider/' . $model->image);
        $model->delete();
        return redirect()->back();
    }
}
