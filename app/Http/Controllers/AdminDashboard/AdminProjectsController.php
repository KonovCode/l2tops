<?php

namespace App\Http\Controllers\AdminDashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProjectUpdateRequest;
use Illuminate\Support\Facades\Session;
use App\Models\Project;
use Carbon\Carbon;

class AdminProjectsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Project::all();

        return view('Pages.AdminDashboard.projects-all', ['projects' => $projects]);
    }

    public function updateStatus(ProjectUpdateRequest $request, $id) 
    {
        $project = Project::findOrFail($id);
        $new = $request->all();

        $project->update([
            'status' => $new['status'], 
            'premium' => ($project->premium !== $new['premium'] ? $new['premium'] : $project->premium),
            'premium_term' => ($new['premium'] === '1' ? Carbon::now()->addDays(30)->toDateString() : null),
            'status_term' => ($new['status'] !== 'default' ? Carbon::create($new['add_term'])->toDateString() : null),
        ]);

        Session::flash('message', 'Проект успешно обновлен');

        return back();
    }

    public function publishProject($id) 
    {
        Project::findOrFail($id)->update(['state_public' => 1]);

        Session::flash('message', 'Проект был успешно опубликован!');

        return back();
    } 

    public function hideProject($id) 
    {
        Project::findOrFail($id)->update(['state_public' => 0]);

        Session::flash('message', 'Проект успешно снят с главной страницы!');

        return back();
    } 

    public function delete($id) 
    {
        Project::findOrFail($id)->delete();

        Session::flash('message', 'Проект успешно удален!');

        return back();
    } 
}
