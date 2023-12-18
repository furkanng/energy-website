<?php

namespace App\Http\Controllers\Admin\Customer;

use App\Http\Controllers\Controller;
use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
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
        $messages = Message::all();
        return view('user.pages.message', compact("messages"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            "name" => "required",
            "email" => "required",
            "content" => "required",
        ]);
        $model = new Message();
        $model->fill(request()->all())->save();
        return redirect()->back()->with('success', 'Başarıyla yüklendi.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $message = Message::findOrFail($id);
        return view("user.pages.messageEdit", compact("message"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $model = Message::findOrFail($id);
        $model->delete();
        return redirect()->back()->with('success', 'Başarıyla yüklendi.');
    }
}
