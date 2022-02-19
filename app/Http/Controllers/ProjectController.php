<?php

namespace App\Http\Controllers;

use App\Models\ProjectCategory;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    //
    public function project()
    {

        return view('Frontend.pages.projects');
    }

    public function index()
    {

        $datas = ProjectCategory::all();
        return view('admin.pages.projectcategory.index', compact('datas'));
    }

    public function create()
    {
        return view('admin.pages.projectcategory.upload');
    }

    public function store(Request $request)
    {

        $request->validate([
            'title' => 'required'
        ]);
        $projecy_category = new ProjectCategory();
        $projecy_category->title = $request->title;
        $projecy_category->status = $request->status;
        $projecy_category->save();

        return redirect()->route('project.category')->with('message', 'Successfully Created Category!!');
    }

    public function edit($id)
    {
        $project_category = ProjectCategory::findOrFail($id);

        return view('admin.pages.projectcategory.edit', compact('project_category'));
    }

    public function update(Request $request, $id)
    {

        $request->validate([
            'title' => 'required'
        ]);
        $project_category = ProjectCategory::findOrFail($id);
        $project_category->title = $request->title;
        if ($request->status) {
            $project_category->status = $request->status;
        } else {
            $project_category->status = 0;
        }

        $project_category->save();

        return redirect()->route('project.category')->with('message', 'Successfully Updatec Category!!');
    }


    public function delete($id)
    {

        $projecy_category =  ProjectCategory::destroy($id);
        if ($projecy_category) {
            return redirect()->back()->with('message', 'Successfully Deleted Category!!');
        } else {
            return redirect()->back()->with('error', 'Category Not Found!!');
        }
    }
}
