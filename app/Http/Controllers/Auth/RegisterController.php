<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\RegisterRequest;
use App\Models\User;
use Illuminate\Auth\Events\Registered;

class RegisterController extends Controller
{
    public function index() {
        return view('Auth.register');
    }

    public function register(RegisterRequest $request) {
       $user = User::create([
        'name' => $request->name, 
        'email' => $request->email, 
        'password' => bcrypt($request->password)
        ]);

        if($user) {
            event(new Registered($user));

            auth('web')->login($user);

            return redirect()->route('verification.notice');
        }

        return redirect(route('dashboard'));

    }


    
}
