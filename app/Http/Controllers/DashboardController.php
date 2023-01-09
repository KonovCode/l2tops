<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Styles;
use Illuminate\Support\Facades\Session;


class DashboardController extends Controller
{
    public function index() {
        $projects = Project::all();
        $styles = Styles::get()->first();

        return view('Pages.AdminDashboard.general-page-dashboard', ['projects' => $projects, 'styles' => $styles]);
    }

    public function addGradient(Request $request) {
        $color = $request->validate([
            'gradient' => 'required|string',
        ]);

        Styles::create(['gradient' => $color['gradient']]);

        return back();
    }   

    public function deleteGradient($id) {
        Styles::findOrFail($id)->delete();

        return back();
    }
}
