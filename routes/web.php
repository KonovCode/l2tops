<?php

use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\ResetPassword;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard')->middleware('auth');
    Route::get('/logout', [LoginController::class, 'destroy'])->name('logout');
});

Route::get('/email/verify', function () {
    return view('Auth.verify-email');
})->middleware('auth')->name('verification.notice');

Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();
 
    return redirect()->route('dashboard');
})->middleware(['auth', 'signed'])->name('verification.verify');

Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();
 
    return back()->with('message', 'Verification link sent!');
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');


Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/forgot-password', [ForgotPasswordController::class, 'index'])->name('forgot-password');
Route::post('/forgot-password', [ForgotPasswordController::class, 'sendReset'])->name('password-email');

// Route::get('/reset-password/{token}', function ($token) {
//     return view('Auth.reset-password', ['token' => $token]);
// })->middleware('guest')->name('password.reset');

Route::get('/reset-password', [ResetPassword::class, 'index'])->name('password.reset');

Route::post('/reset-password', [ResetPassword::class, 'reset'])->name('password.update');

Route::get('/register', [RegisterController::class, 'index'])->name('register');

Route::post('/registred-user', [RegisterController::class, 'register'])->name('registred-user');

Route::get('/login', [LoginController::class, 'index'])->name('login');

Route::post('/login-user', [LoginController::class, 'login'])->name('login-user');



