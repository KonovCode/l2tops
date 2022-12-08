<?php

namespace App\Http\Controllers\AdminDashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminPriceController extends Controller
{
    public function index() 
    {
        return view('Pages.AdminDashboard.price-controll');
    }
}
