<?php

namespace App\Http\Controllers\AdminDashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminAddProjectController extends Controller
{
    public function index() 
    {
        return view('Pages.AdminDashboard.add-project');
    }
}
