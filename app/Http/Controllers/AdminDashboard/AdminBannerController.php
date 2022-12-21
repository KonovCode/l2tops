<?php

namespace App\Http\Controllers\AdminDashboard;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use App\Models\VipBanner;
use Illuminate\Http\Request;
use App\Http\Requests\BannerRequest;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

class AdminBannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vip_banner = VipBanner::all()->first();
        $banners = Banner::all();

        return view('Pages.AdminDashboard.banner-controll', ['vip_banner' => $vip_banner, 'banners' => $banners]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function hide($id)
    {
        $banner = Banner::findOrFail($id);

        $banner->update(['state' => 0]);

        if($banner->state === 0) {
            Session::flash('message', 'Слайд был удален с главной страницы!');
        }

        return back();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function publish($id)
    {
        $banner = Banner::findOrFail($id);

        $banner->update(['state' => 1]);

        if($banner->state === 1) {
            Session::flash('message', 'Слайд успешно опубликован на главной странице!');
        }

        return back();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function addBanner(BannerRequest $request, $id)
    {
        $banner = Banner::findOrFail($id);

        $file_name = time().'.'.$request->file('img')->extension();

        Storage::putFileAs('public/banners', $request->file('img'), $file_name);

        $banner->update([
            'name_project' => $request->name_project,
            'project_url' => $request->url,
            'path_img' => asset(Storage::url('banners/'.$file_name)),
            'file_name' => $file_name,
            'buy_term' => $request->buy_term,
            'reserved' => 1,
            'user_id' => Auth::user()->id,
        ]);

        Session::flash('message', 'Слайд успешно загружен!');

        return back();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $banner = Banner::findOrFail($id);

        Storage::disk('public')->delete('banners/'.$banner->file_name);

        $banner->update([
            'name_project' => null,
            'project_url' => null,
            'path_img' => null,
            'file_name' => null,
            'buy_term' => null,
            'reserved' => 0,
            'user_id' => Auth::user()->id,
        ]);

        Session::flash('message', 'Слайд успешно удален!');

        return back();
    }
}
