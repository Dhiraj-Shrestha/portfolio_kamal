<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\ProjectCategory;
use App\Models\ToolBackend;
use App\Models\ToolFrontEnd;
use App\Models\ToolGeneral;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {

        $FrontEndTools = ToolFrontEnd::all();
        $BackEndTools = ToolBackend::all();
        $GeneralTools = ToolGeneral::all();
        $projectCategories = ProjectCategory::all();
  
        $projects = Project::all();

        // dd($projects->category);

        return view('Frontend.home', compact('FrontEndTools', 'BackEndTools', 'GeneralTools','projectCategories','projects'));
    }
    //
    public function login()
    {
        return view('admin.auth.login');
    }

    //request is for taking 'form' value
    public function authenticate(Request $request)
    {

        // dd($request->all());

        //attempt is asking for email and password
        // it will check where the email and password is in database or not
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            // $request->session()->regenerateToken();

            $request->session()->put('name', Auth::user()->name);

            return redirect('/dashboard');
        } else {
            return back()->withErrors(['failed' => 'Invalid Username/password']);
        }
    }
}
