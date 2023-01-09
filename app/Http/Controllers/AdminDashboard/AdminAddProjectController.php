<?php

namespace App\Http\Controllers\AdminDashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProjectRequest;
use App\Http\Resources\ProjectResource;
use App\Models\Project;
use Illuminate\Support\Facades\Session;


class AdminAddProjectController extends Controller
{
    public function index() 
    {
        return view('Pages.AdminDashboard.add-project');
    }

    public function addProject(ProjectRequest $request) 
    {
        new ProjectResource(Project::create($request->validated()));

        Session::flash('message', 'ok');

        return back();
    }
}
