<?php

namespace App\Http\Controllers\AdminDashboard;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;

class AdminPriceController extends Controller
{
    public function index() 
    {
        $services = Service::all();

        return view('Pages.AdminDashboard.price-controll', ['services' => $services]);
    }

    public function updatePrice(Request $request, $id)  
    {
        $new = $request->validate([
            'price' => ['required', 'numeric', 'between:0,3000'],
        ]);
        
        Service::findOrFail($id)->update(['price' => $new['price']]);

        return back();
                
    }
}
