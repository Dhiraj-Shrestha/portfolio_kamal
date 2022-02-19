<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use App\Models\ProjectCategory;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = Project::all();
        return view('admin.pages.project.index',compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $projectCategories = ProjectCategory::all()->where('status',1);
        return view('admin.pages.project.create',compact('projectCategories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'project_title' => ['required'],
            'usecase_title' => ['required'],
            'average_rating' => ['required'],
            'active_user' => ['required'],
            'project_category_id' => ['required'],
            'services' => ['required'],
            'availability' => ['required'],
            'project_image' => ['required'],
            'project_story_image' => ['required'],
            'banner_image' => ['required'],
            'navigation_image' => ['required'],
            'project_description' => ['min:50'],
            'project_month' => ['min:1'],
            'project_team_member' => ['min:1'],
            'why_to_use_description' => ['min:50'],
            'project_story' => ['min:50'],
            'navigation_description' => ['min:50'],
            'playstore_link' => ['nullable', 'url'],
            'appstore_link' => ['nullable', 'url'],
            'project_tag' => ['required'],
            'banner_title' => ['required'],
        ]);

        $data= $request->all();

        if($request->hasFile('project_image')){
            $file = $request->project_image;
            $fileName = time() . $file->getClientOriginalName();
            $file->move('projectImage', $fileName);
            $data['project_image'] = $fileName;

        }
        if($request->hasFile('banner_image')){
            $file = $request->banner_image;
       
            $fileName = time() . $file->getClientOriginalName();
            $file->move('projectImage/bannerImage', $fileName);
            $data['banner_image'] = $fileName;

        }
        if($request->hasFile('navigation_image')){
            $file = $request->navigation_image;
       
            $fileName = time() . $file->getClientOriginalName();
            $file->move('projectImage/navigationImage', $fileName);
            $data['navigation_image'] = $fileName;

        }
        if($request->hasFile('project_story_image')){
            $file = $request->project_story_image;
       
            $fileName = time() . $file->getClientOriginalName();
            $file->move('projectImage/projectStoryImage', $fileName);
            $data['project_story_image'] = $fileName;

        }

        
        Project::create($data);
        return redirect()->back()->with('message', 'project Added Sucessfully');

        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
