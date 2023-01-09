<?php

use App\Http\Controllers\AddProjectController;
use App\Http\Controllers\AdminDashboard\AdminAddProjectController;
use App\Http\Controllers\AdminDashboard\AdminPriceController;
use App\Http\Controllers\AdminDashboard\AdminProjectsController;
use App\Http\Controllers\AdminDashboard\AdminUsersController;
use App\Http\Controllers\AdminDashboard\VipBannerController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LogotypeController;
use Illuminate\Support\Facades\Route;
//---------------------------------------------------------
// auth + email verify routes
// --------------------------------------------------------
// use Illuminate\Foundation\Auth\EmailVerificationRequest;
// use App\Http\Controllers\Auth\ResetPassword;
// use Illuminate\Http\Request;
// use App\Http\Controllers\Auth\RegisterController;
// use App\Http\Controllers\Auth\ForgotPasswordController;
// use App\Http\Controllers\AdminDashboard\AdminGeneralPageController;



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


Route::middleware(['can:admin' ,'auth'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::post('/add-gradient', [DashboardController::class, 'addGradient'])->name('add.gradient');
    Route::post('/delete-gradient/{id}', [DashboardController::class, 'deleteGradient'])->name('delete.gradient');
    Route::get('/logout', [LoginController::class, 'destroy'])->name('logout');
    Route::get('/add-project', [AdminAddProjectController::class, 'index'])->name('add.project');
    
    Route::post('/save-project', [AdminAddProjectController::class, 'addProject'])->name('save.project');

    Route::get('/banner-controll', [VipBannerController::class, 'index'])->name('banners.index');
    Route::post('/add-vip-banner', [VipBannerController::class, 'add_banner'])->name('add.vip.banner');
    Route::post('/delete-vip-banner/{id}', [VipBannerController::class, 'delete'])->name('delete.vip.banner');
    Route::post('/add-publish-banner/{id}', [VipBannerController::class, 'addPublish'])->name('add.publish.banner');
    Route::post('/hide-publish-banner/{id}', [VipBannerController::class, 'hidePublish'])->name('hide.publish.banner');
    
    Route::get('/projects-all', [AdminProjectsController::class, 'index'])->name('projects.index');
    Route::post('/update-status/{id}', [AdminProjectsController::class, 'updateStatus'])->name('update.status');
    Route::post('/add-publish-project/{id}', [AdminProjectsController::class, 'publishProject'])->name('add.publish.project');
    Route::post('/hide-project/{id}', [AdminProjectsController::class, 'hideProject'])->name('hide.ptoject');
    Route::post('/delete-project/{id}', [AdminProjectsController::class, 'delete'])->name('delete.project');

    Route::get('/prices-controll', [AdminPriceController::class, 'index'])->name('prices.index');

    Route::post('/price-update/{id}', [AdminPriceController::class, 'updatePrice'])->name('price.update');

});


Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/add-project-l2tops', [AddProjectController::class, 'index'])->name('add.project.home');

Route::get('/about-l2tops', [HomeController::class, 'aboutIndex'])->name('about.index');

Route::get('/contact-l2tops', [HomeController::class, 'contactIndex'])->name('contact.index');

Route::get('/reclame-l2tops', [HomeController::class, 'reclameIndex'])->name('reclame.index');

Route::post('/add-new-project', [AddProjectController::class, 'addProject'])->name('add.new.project');

Route::get('/login', [LoginController::class, 'index'])->name('login');

Route::post('/login-user', [LoginController::class, 'login'])->name('login-user');



// auth-routes user + email verify//

// Route::get('/email/verify', function () {
//     return view('Auth.verify-email');
// })->middleware('auth')->name('verification.notice');

// Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
//     $request->fulfill();
 
//     return redirect()->route('dashboard');
// })->middleware(['auth', 'signed'])->name('verification.verify');

// Route::post('/email/verification-notification', function (Request $request) {
//     $request->user()->sendEmailVerificationNotification();
 
//     return back()->with('message', 'Verification link sent!');
// })->middleware(['auth', 'throttle:6,1'])->name('verification.send');

// Route::get('/forgot-password', [ForgotPasswordController::class, 'index'])->name('forgot-password');

// Route::post('/forgot-password', [ForgotPasswordController::class, 'sendReset'])->name('password-email');

// Route::get('/reset-password', [ResetPassword::class, 'index'])->name('password.reset');

// Route::post('/reset-password', [ResetPassword::class, 'reset'])->name('password.update');

// Route::get('/register', [RegisterController::class, 'index'])->name('register');

// Route::post('/registred-user', [RegisterController::class, 'register'])->name('registred-user');



