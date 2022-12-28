<?php

namespace App\Http\Controllers\AdminDashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\VipBannerRequest;
use App\Models\VipBanner;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class VipBannerController extends Controller
{
    public function index() {

        $banner = VipBanner::get()->first();

        return view('Pages.AdminDashboard.banner-controll', ['banner' => $banner]);
    }

    public function add_banner(VipBannerRequest $request) 
    {
       $imageName = time().'.'.$request->img->extension();

       Storage::putFileAs('public/vip-banner', $request->file('img'), $imageName);

       VipBanner::create([
            'title' => $request->title,
            'img' => asset(Storage::url('vip-banner/'.$imageName)),
            'file_name' => $imageName,
            'link' => $request->link,
            'buy_term' => $request->buy_term,
            'buy_date' => $request->buy_date,
       ]);

       Session::flash('message', 'Баннер был успешно загружен!');

       return back();
    }

    public function addPublish($id) {
        VipBanner::findOrFail($id)->where('publish', 0)->update(['publish' => 1]);

        Session::flash('message', 'Баннер успешно опубликован');

        return back();
    }

    public function hidePublish($id) {
        VipBanner::findOrFail($id)->where('publish', 1)->update(['publish' => 0]);

        Session::flash('message', 'Вы убрали баннер с главной страницы');

        return back();
    }

    public function delete($id) 
    {
        $banner = VipBanner::findOrFail($id);

        Storage::disk('public')->delete('vip-banner/'.$banner->file_name);

        $banner->delete();

        Session::flash('message', 'Баннер был успешно удален!');

        return back();
    }
}
