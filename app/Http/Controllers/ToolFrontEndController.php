<?php

namespace App\Http\Controllers;

use App\Models\ToolFrontEnd;
use Illuminate\Http\Request;

class ToolFrontEndController extends Controller
{
    //
    public function index()
    {
        $datas = ToolFrontEnd::all();

        return view('admin.pages.toolfrontend.index', compact('datas'));
    }
    public function create()
    {

        return view('admin.pages.toolfrontend.create');
    }
    public function upload(Request $request)
    {
        // $request->validate([
        //     'title' => 'required'
        // ]);
        $data = new ToolFrontEnd();

        if ($request->has('file')) {
            $image = $request->file;
            $imagename = time() . '.' . $image->getClientOriginalExtension();
            $request->file->move('ToolFrontend', $imagename);
        }
        $data->image = $imagename ?? $data->image;
        $data->title = $request->title;
        $data->save();
        return redirect()->route('toolbox.frontend')->with('message', 'Tool has been successfully added ');
    }

    public function delete($id)
    {
        $data = ToolFrontEnd::findOrFail($id);
        $data->delete();
        return redirect()->route('toolbox.frontend')->with('message', 'Tool has been successfully deleted ');
    }

    public function edit($id)
    {

        $data = ToolFrontEnd::findOrFail($id);
        return view('admin.pages.toolfrontend.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {

        $data = ToolFrontEnd::findOrFail($id);
        if ($request->has('file')) {
            $image = $request->file;
            $imagename = time() . '.' . $image->getClientOriginalExtension();
            $request->file->move('ToolFrontend', $imagename);
        }
        $data->image = $imagename ?? $data->image;
        $data->title = $request->title;
        $data->save();
        return redirect()->route('toolbox.frontend')->with('message', 'Tool has been successfully Updated ');
    }
}
