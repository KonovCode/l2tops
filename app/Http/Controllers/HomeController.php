<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Carbon\Carbon;


class HomeController extends Controller
{
    public function index() {

        $premium = Project::all()->where('premium', 1);

        $today = Project::all()->where('date_open', Carbon::now()->toDateString());

        $yesterday = Project::all()->where('date_open', Carbon::now()->subDay()->toDateString());

        $nextSevenDays = Project::all()->whereBetween('date_open', [Carbon::now()->addDays(1)->toDateString(), Carbon::now()->addDays(7)->toDateString()]);

        $weekAgoAndMore = Project::all()->where('date_open', '<', Carbon::now()->subDays(8)->toDateString())->where('date_open', '>', Carbon::now()->subDays(60));

        $weekAndMore = Project::all()->whereBetween('date_open', [Carbon::now()->addDays(8)->toDateString(), Carbon::now()->addDays(60)->toDateString()]);

        $tomorrow = Project::all()->where('date_open', Carbon::now()->addDays(1)->toDateString());

        $previousSevenDays = Project::all()->where('date_open', '<', Carbon::now()->subDays(1)->toDateString())->where('date_open', '>=', Carbon::now()->subDays(8));

        return view('Pages.home', [
            'premium' => $premium,
            'today' => $today,
            'yesterday' => $yesterday,
            'nextSevenDays' => $nextSevenDays,
            'weekAgoAndMore' => $weekAgoAndMore,
            'tomorrow' => $tomorrow,
            'previousSevenDays' => $previousSevenDays,
            'weekAndMore' => $weekAndMore,
        ]);
    }
}
