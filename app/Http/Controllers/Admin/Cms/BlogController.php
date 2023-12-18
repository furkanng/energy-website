<?php

namespace App\Http\Controllers\Admin\Cms;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
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
        $blogs = Blog::all();
        return view("user.pages.blog", compact("blogs"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            "title" => "required",
        ]);
        $model = new Blog();
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
        $blog = Blog::findOrFail($id);
        return view("user.pages.blogEdit", compact("blog"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            "title" => "required|sometimes",
        ]);
        $model = Blog::findOrFail($id);
        $model->fill($request->all())->forceFill([
            'status' => $request->has('status') ? 1 : 0,
        ])->save();
        return redirect()->back()->with('success', 'Başarıyla yüklendi.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $model = Blog::findOrFail($id);
        $model->delete();
        return redirect()->back()->with('success', 'Başarıyla yüklendi.');
    }
}
