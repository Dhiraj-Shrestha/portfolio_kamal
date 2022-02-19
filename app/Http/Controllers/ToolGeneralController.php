<?php

namespace App\Http\Controllers;

use App\Models\ToolGeneral;
use Illuminate\Http\Request;

class ToolGeneralController extends Controller
{
    //
    public function index()
    {
        $datas = ToolGeneral::all();
        return view('admin.pages.toolgeneral.index', compact('datas'));
    }
    public function create()
    {

        return view('admin.pages.toolgeneral.create');
    }
    public function upload(Request $request)
    {
        // $request->validate([
        //     'title' => 'required'
        // ]);
        $data = new ToolGeneral();

        if ($request->has('file')) {
            $image = $request->file;
            $imagename = time() . '.' . $image->getClientOriginalExtension();
            $request->file->move('ToolGeneral', $imagename);
        }
        $data->image = $imagename ?? $data->image;
        $data->title = $request->title;
        $data->save();
        return redirect()->route('toolbox.general')->with('message', 'Tool has been successfully added ');
    }

    public function delete($id)
    {
        $data = ToolGeneral::findOrFail($id);
        $data->delete();
        return redirect()->route('toolbox.general')->with('message', 'Tool has been successfully deleted ');
    }

    public function edit($id)
    {

        $data = ToolGeneral::findOrFail($id);
        return view('admin.pages.toolgeneral.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {

        $data = ToolGeneral::findOrFail($id);
        if ($request->has('file')) {
            $image = $request->file;
            $imagename = time() . '.' . $image->getClientOriginalExtension();
            $request->file->move('ToolGeneral', $imagename);
        }
        $data->image = $imagename ?? $data->image;
        $data->title = $request->title;
        $data->save();
        return redirect()->route('toolbox.general')->with('message', 'Tool has been successfully Updated ');
    }
}
