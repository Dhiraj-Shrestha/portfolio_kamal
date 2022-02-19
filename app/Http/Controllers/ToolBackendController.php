<?php

namespace App\Http\Controllers;

use App\Models\ToolBackend;
use Illuminate\Http\Request;

class ToolBackendController extends Controller
{
    //
    public function index()
    {
        $datas = ToolBackend::all();
        return view('admin.pages.toolBackend.index', compact('datas'));
    }
    public function create()
    {

        return view('admin.pages.toolBackend.create');
    }
    public function upload(Request $request)
    {
        // $request->validate([
        //     'title' => 'required'
        // ]);
        $data = new ToolBackend();

        if ($request->has('file')) {
            $image = $request->file;
            $imagename = time() . '.' . $image->getClientOriginalExtension();
            $request->file->move('ToolBackend', $imagename);
        }
        $data->image = $imagename ?? $data->image;
        $data->title = $request->title;
        $data->save();
        return redirect()->route('toolbox.backend')->with('message', 'Tool has been successfully added ');
    }

    public function delete($id)
    {
        $data = ToolBackend::findOrFail($id);
        $data->delete();
        return redirect()->route('toolbox.backend')->with('message', 'Tool has been successfully deleted ');
    }

    public function edit($id)
    {

        $data = ToolBackend::findOrFail($id);
        return view('admin.pages.toolBackend.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {

        $data = ToolBackend::findOrFail($id);
        if ($request->has('file')) {
            $image = $request->file;
            $imagename = time() . '.' . $image->getClientOriginalExtension();
            $request->file->move('ToolBackend', $imagename);
        }
        $data->image = $imagename ?? $data->image;
        $data->title = $request->title;
        $data->save();
        return redirect()->route('toolbox.backend')->with('message', 'Tool has been successfully Updated ');
    }
}
