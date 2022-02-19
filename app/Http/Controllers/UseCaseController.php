<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class UseCaseController extends Controller
{
    //
    public function show($id){

        $projectDetail = Project::find($id);


        return view('Frontend.pages.usecase',compact('projectDetail'));
    }
}
