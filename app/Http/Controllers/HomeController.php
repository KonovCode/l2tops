<?php

namespace App\Http\Controllers;

use App\Events\CheckServicesTerm;
use App\Http\Requests\ProjectFilterRequest;
use App\Http\Resources\ProjectResource;
use App\Http\Filters\ProjectFilter;
use App\Models\Project;
use App\Models\Service;
use App\Models\VipBanner;
use Carbon\Carbon;
use App\Models\Styles;


class HomeController extends Controller
{
    public function index(ProjectFilterRequest $request) {

        event(new CheckServicesTerm());

        $styles = Styles::get()->first();

        $banner = VipBanner::get()->first();

        $data = $request->validated();

        $filter = app()->make(ProjectFilter::class, ['queryParams' => array_filter($data)]);
        
        $projects = ProjectResource::collection(Project::filter($filter)->where('state_public', 1)->get());

        $premium_already_open = $projects->where('premium', 1)->where('date_open', '<', Carbon::now()->toDateString())->where('date_open', '>', Carbon::now()->subDays(99));
        
        $premium_open_soon = $projects->where('premium', 1)->where('date_open', '>', Carbon::now()->toDateString())->where('date_open', '<', Carbon::now()->addDays(99));

        $today = $projects->where('date_open', Carbon::now()->toDateString());

        $yesterday = $projects->where('date_open', Carbon::now()->subDay()->toDateString());

        $nextSevenDays = $projects->whereBetween('date_open', [Carbon::now()->addDays(1)->toDateString(), Carbon::now()->addDays(7)->toDateString()]);

        $weekAgoAndMore = $projects->where('date_open', '<', Carbon::now()->subDays(8)->toDateString())->where('date_open', '>', Carbon::now()->subDays(60));

        $weekAndMore = $projects->whereBetween('date_open', [Carbon::now()->addDays(8)->toDateString(), Carbon::now()->addDays(60)->toDateString()]);

        $tomorrow = $projects->where('date_open', Carbon::now()->addDays(1)->toDateString());

        $previousSevenDays = $projects->where('date_open', '<', Carbon::now()->subDays(1)->toDateString())->where('date_open', '>=', Carbon::now()->subDays(8));

        return view('Pages.Home.home', [
            'projects' => $projects,
            'banner' => $banner,
            'premium_already_open' => $premium_already_open,
            'premium_open_soon' => $premium_open_soon,
            'today' => $today,
            'yesterday' => $yesterday,
            'nextSevenDays' => $nextSevenDays,
            'weekAgoAndMore' => $weekAgoAndMore,
            'tomorrow' => $tomorrow,
            'previousSevenDays' => $previousSevenDays,
            'weekAndMore' => $weekAndMore,
            'styles' => $styles,
        ]);
    }

    public function aboutIndex() 
    {
        $styles = Styles::get()->first();

        $banner = VipBanner::get()->first();

        return view('Pages.Home.about', ['styles' => $styles, 'banner' => $banner]);
    } 

    public function contactIndex() 
    {
        $styles = Styles::get()->first();

        $banner = VipBanner::get()->first();

        return view('Pages.Home.contact', ['styles' => $styles, 'banner' => $banner]);
    }

    public function reclameIndex() 
    {
        $styles = Styles::get()->first();

        $banner = VipBanner::get()->first();

        $services = Service::all();

        return view('Pages.Home.reclame', ['styles' => $styles, 'banner' => $banner, 'services' => $services]);
    }
}
