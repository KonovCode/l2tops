<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProjectRequest;
use App\Http\Resources\ProjectResource;
use App\Models\Project;
use Illuminate\Support\Facades\Session;
use App\Models\Styles;
use App\Models\VipBanner;

class AddProjectController extends Controller
{
    public function index() 
    {
        $styles = Styles::get()->first();

        $banner = VipBanner::get()->first();

        return view('Pages.Home.add-project-home', ['styles' => $styles, 'banner' => $banner]);
    }

    public function addProject(ProjectRequest $request) 
    {   
        new ProjectResource(Project::create($request->validated()));

        Session::flash('message', 'Заявка на размещение проекта принята!');

        Session::flash('block_message', 'Ваш проект появится на главной странице после прохождения модерации (обычно не больше 3 часов). C уважением Ваш l2tops.net');

        return back();
    }
}
